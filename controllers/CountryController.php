<?php
/**
 * 数据库操作
 * Created by PhpStorm.
 * User: 平凡
 * Date: 2023/11/5
 * Time: 15:52
 */

namespace app\controllers;

use app\models\Country;
use yii\data\Pagination;
use yii\web\Controller;

class CountryController extends Controller
{

    public function actionIndex()
    {
        $query = Country::find();

        $pagination = new Pagination([
            'defaultPageSize'=>5,
            'totalCount'=>$query->count()
        ]);

        $countries = $query->orderBy('name')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index',[
            'countries'=>$countries,
            'pagination'=>$pagination
        ]);
    }
}