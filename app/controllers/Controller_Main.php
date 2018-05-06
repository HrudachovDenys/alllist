<?php

class Controller_Main extends Controller
{
    public function action_index()
    {
        $data = array(
            array('categories/theproperty', 'the-property.png', 'Недвижимость', 0),
            array('categories/transport', 'transport.png', 'Транспорт', 0),
            array('categories/job', 'job.png', 'Работа', 0),
            array('categories/electronics', 'electronics.png', 'Електроника', 0),
            array('categories/repairs', 'repairs.png', 'Строительство, ремонт', 0),
            array('categories/interior', 'interior.png', 'Мебель, интерьер', 0),
            array('categories/garden', 'garden.png', 'Дом, сад', 0),
            array('categories/clothes', 'clothes.png', 'Одежда, аксессуары', 0),
            array('categories/childensgoods', 'childens-goods.png', 'Детские товары', 0),
            array('categories/animals', 'animals.png', 'Животные, растения', 0),
            array('categories/beauty', 'beauty.png', 'Красота, здоровье', 0),
            array('categories/hobby', 'hobby.png', 'Хобби, спорт', 0),
            array('categories/business', 'business.png', 'Услуги и бизнес', 0),
            array('categories/food', 'food.png', 'Продукты питания', 0),
            array('categories/datingservice', 'dating-service.png', 'Знакомства', 0)
        );
        
        $view = new View('main', 'main');
        $view->render($data);
    }
}