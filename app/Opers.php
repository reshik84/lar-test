<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Http\FormRequest;

class Opers extends Model
{
    protected $table = 'opers';
    
    protected $fillable = [
        'first_name',
        'last_name',
        'phone',
        'email',
        'sum',
        'card_no',
        'card_month',
        'card_year',
        'cvv',
        'city',
        'state',
        'address',
        'zip_code',
        'result',
    ];
    
    
    public function checkApi(FormRequest $request) {
        $r = $request->all();
        unset($r['_token']);
        ksort($r);
        $hash = md5(implode(':', $r));
        $r['hash'] = $hash;
        $client = new \GuzzleHttp\Client();
        $res = $client->post(config('app.api_url'), ['form_params' => $r]);
        try {
            $result = \GuzzleHttp\json_decode($res->getBody()->getContents());
        } catch (Exception $exc) {
            $result->errors = true;
        }
//        print_r($result); die();
        $this->result = \GuzzleHttp\json_encode($result);
        
        return $result;
    }
    
}
