<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }


    /**
     * Displays homepage.
     *
     * @return mixed
    */

    public function actionIndex()
    {

        return $this->render('index');
    }
    public function actionHotelListView()
    {
        return $this->render('hotel-list-view');
    }

    public function actionHotelDetailed($location_id,$hotels_id)
    {
        return $this->render('hotel-detailed');
    }


    public function actionFlightListView()
    {
        return $this->render('flight-list-view');
    }
    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            $model->password = '';

            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    // Yii::$app->user->logout();
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }

    public function beforeAction($action)
    {            
        if ($action->id == 'createhotels' or $action->id == 'showhotels' or $action->id == 'hotel_images') {
            $this->enableCsrfValidation = false;
        }

        return parent::beforeAction($action);
    }

    public function actionHotel_images() {

        $imagesArray = explode(',', substr(Yii::$app->request->post('images'), 1, -1));

        $slides = '';

        $slides .= '
        <div class="photo-gallery style1" id="photo-gallery1" data-animation="slide" data-sync="#image-carousel1">
            <ul class="slides">';

            foreach ($imagesArray as $key => $value) {
               $slides .= '<li><img src="https://photo.hotellook.com/image_v2/crop/'.trim($value, '"').'/900/500.auto" /></li>';

            }
        
        $slides .= '
            </ul>
        </div>
        <div class="image-carousel style1" id="image-carousel1" data-animation="slide" data-item-width="70" data-item-margin="10" data-sync="#photo-gallery1">
            <ul class="slides">';

            foreach ($imagesArray as $key => $value) {
               $slides .= '<li><img src="https://photo.hotellook.com/image_v2/crop/'.trim($value, '"').'/70/70.auto" /></li>';

            }
        
        $slides .= '
            </ul>
        </div>';
        
        return $slides;
    }

    public function getFilter_value($array, $key, $value, $operator) {
        
        $result = array_filter($array, function ($item) use ($key, $value, $operator) {
            
            if ($operator == '>=') {

                if ( (float)$item->$key >= (float)$value ) {
                    return true;
                } 
            }

            if ($operator == '<=') {
                if ( (float)$item->$key <= (float)$value ) {
                    return true;
                }
            }

            if ($operator == '==' && gettype($value) != 'array') {
                if ( (float)$item->$key == (float)$value ) {
                    return true;
                }           
            }


            if ($operator == '==' && gettype($value) == 'array') {

                $containsSearch = count(array_intersect($value, $item->amenities)) == count($value);
                return $containsSearch;

            }

            if($key == '' && $value == '' && $operator == '') {
                return true;
            }

            return false;
        });

        return $result;
    }

    public function actionShowhotels()
    {

        $query = (new \yii\db\Query())->select(['data'])->from('hotels_data')->where(['id' => [28]]);
        $command = $query->createCommand();
        $data = $command->queryAll();
        $array = json_decode($data[0]['data'])->hotels;




        $limit = Yii::$app->request->post('limit');
        $offset = Yii::$app->request->post('offset');
        $min_max = Yii::$app->request->post('min_max');
        $ratings = Yii::$app->request->post('ratings');
        $amenities = Yii::$app->request->post('amenities');
        $sort = Yii::$app->request->post('sort');
        $guest_rating = Yii::$app->request->post('guest_rating');
        $hotel_amenities = Yii::$app->request->post('hotel_amenities');

        $filtered_data = $this->getFilter_value($array, '', '', '');
        
        if ($min_max != 'default') {


            $min = explode('-', $min_max)[0];
            $filtered_data = $this->getFilter_value($filtered_data, 'minprice', $min, '>=');
    
            $max = explode('-', $min_max)[1];
            $filtered_data = $this->getFilter_value($filtered_data, 'minprice', $max, '<=');

        }

        if ($guest_rating != 'default') {

            $min_rate = explode('-', $guest_rating)[0];
            $filtered_data = $this->getFilter_value($filtered_data, 'rating', $min_rate, '>=');
        
            $max_rate = explode('-', $guest_rating)[1];
            $filtered_data = $this->getFilter_value($filtered_data, 'rating', $max_rate, '<=');

        }

        if ($ratings != 'default') {
            $filtered_data = $this->getFilter_value($filtered_data, 'stars', $ratings, '==');
        }

        if ($amenities != 'default') {
            $filtered_data = $this->getFilter_value($filtered_data, 'amenities', array_values(explode(",", $amenities)), '==');
        }

        if ($hotel_amenities != 'default') {
            $filtered_data = $this->getFilter_value($filtered_data, 'amenities', array_values(explode(",", $hotel_amenities    )), '==');
        }

        if ($sort != 'default') {
            usort($filtered_data, function($a, $b) use ($sort) {
                return $a->{$sort} > $b->{$sort} ? -1 : 1;
            });
        }


        $return_data = json_decode($data[0]['data']);
        $return_data->hotels = '';
        $return_data->filtered_hotels = count($filtered_data);

        // limit data
        $limited_data = [];

        $index = 0;
        foreach ($filtered_data as $key => $value) {

            $index++;

            array_push($limited_data, $value);

            if ($limit == $index) {
                break;
            }

        }

        $return_data->hotels = $limited_data;
        return json_encode($return_data);

    }

    public function getRealIpAddr()
    {
        if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
        {
          $ip=$_SERVER['HTTP_CLIENT_IP'];
        }
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
        {
          $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        else
        {
          $ip=$_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }


    public function actionCreatehotels()
    {
        $data = Yii::$app->request->post('data');
        $destination = Yii::$app->request->post('destination');
            
        $agent_ip = $this->getRealIpAddr().$_SERVER['HTTP_USER_AGENT'];

        // Yii::$app
        //     ->db
        //     ->createCommand()
        //     ->delete('hotels_data', ['ip_user_agent' => $agent_ip])
        //     ->execute();

        Yii::$app->db->createCommand()->insert('hotels_data',
        [
            'ip_user_agent' => $agent_ip,
            'data' => $data,
            'destination' => $destination,
        ])
        ->execute();

        return \yii\helpers\Json::encode($data);

    }
}
