<?php
/**
 * Created by PhpStorm.
 * User: YOA
 * Date: 02/04/2019
 * Time: 19:07
 */

namespace App\Repositories;


use App\Models\Contact;

class ContactRepository extends ResourceRepository
{
    public function __construct(Contact $contact)
    {
        $this->model = $contact;
    }
}