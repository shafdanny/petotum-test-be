<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Log;

class BlockController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Store blocks.
     *
     * @param  Request  $request
     * @return Response
     */
    public function update(Request $request)
    {
        $data = $request->all();

        foreach ($data as $key => $value) {
            DB::table('blocks')
            ->where('position', $value['position'])
            ->update(['text' => $value['text'], 'active'=> $value['active']]);
            //return $value;
        }
        
        return $request;
    }
    //
}
