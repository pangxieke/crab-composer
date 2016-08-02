<?php

/**
 * \HomeController
 */
class HomeController extends BaseController
{

    public function home()
    {
//        $this->mail = Mail::to(['pangxieke@126.com'])
//
//            ->from('MotherFucker <pangxieke@126.com>')
//
//            ->title('Fuck Me!')
//
//            ->content('<h1>Hello~~</h1>');

        $this->view = View::make('home')->with('article',Article::first())

            ->withTitle('crab')

            ->withHelloWorld('hello world, this is <a href="http://www.pangxieke.com">螃蟹壳</a>');

//        Redis::set('key','123',500,'s');
//
//        echo Redis::get('key');
    }
}