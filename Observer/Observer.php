<?php

namespace DesignPatterns\Observer;

class Observer
{
    public function test()
    {
        $publisher = new NewsPublisher();
        $subscriber1 = new NewsSubscriber('First User');
        $subscriber2 = new NewsSubscriber('Second User');

        $publisher->attach($subscriber1);
        $publisher->attach($subscriber2);

        $publisher->publishArticle('New article 1', 'Content for new article 1');
        $publisher->publishArticle('New article 2', 'Content for new article 2');

        $publisher->detach($subscriber2);

        $publisher->publishArticle('New article 3', 'Content for new article 3');
    }
}