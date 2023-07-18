<?php

namespace App\Services;

use \MailchimpMarketing\ApiClient;
use \App\Services\Newsletter;

class MailchimpNewsletter implements Newsletter
{

    public function __construct(protected ApiClient $client)
    {
    }
    public function subscribe($email, $list_id = null)
    {
        $list_id ??= config('services.mailchimp.lists.subscribers');

        $response = $this->client->lists->addListMember($list_id, [
            "email_address" => request('email'),
            "status" => "subscribed",
        ]);

        return $response;
    }

}