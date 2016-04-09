<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Spreedly\Json\SpreedlyCore as Spreedly;

class PaymentApiController extends Controller
{
    public function __construct(Spreedly $spreedly)
    {
        $this->spreedly = $spreedly;
    }

    public function void(Request $request)
    {
        $transactionToken = $request->input('transaction_token');
        $username = $request->input('username');
        if ($transactionToken && $username) {
            $result = $this->spreedly->void($transactionToken);
            //TODO Add your own event or logging
            if ($result['code'] == 200) {
            }
            return response($result['message'], $result['code']);
        }
        return response('Bad Request HTTP Status Code: 400', 400);
    }

    public function refundFull(Request $request)
    {
        $transactionToken = $request->input('transaction_token');
        $username = $request->input('username');
        if ($transactionToken && $username) {
            $result = $this->spreedly->refundFull($transactionToken);
            //TODO Add your own event or logging
            if ($result['code'] == 200) {
            }
            return response($result['message'], $result['code']);
        }
        return response('Bad Request HTTP Status Code: 400', 400);
    }

    public function refundPartial(Request $request)
    {
        $transactionToken = $request->input('transaction_token');
        $username = $request->input('username');
        $amount = (int) $request->input('amount');

        if ($transactionToken && is_int($amount) && $username) {
            $result = $this->spreedly->refundPartial($transactionToken, $amount);
            //TODO Add your own event or logging
            if ($result['code'] == 200) {
            }
            return response($result['message'], $result['code']);
        }
        return response('Bad Request HTTP Status Code: 400', 400);
    }
}
