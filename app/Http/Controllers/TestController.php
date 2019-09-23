<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $string = '234234[哈欠][鼓掌][哈欠][憨笑]hhh红扥';
        $patterns = [
            '/\[晕\]/',
            '/\[心花怒放\]/',
            '/\[鼓掌\]/',
            '/\[哈欠\]/',
            '/\[憨笑\]/',
            '/\[汗\]/',
            '/\[吃惊\]/',
            '/\[鄙视\]/',
            '/\[闭嘴\]/',
            '/\[呲牙\]/',
            '/\[害羞\]/',
            '/\[衰\]/',
            '/\[偷笑\]/',
            '/\[折磨\]/',
            '/\[难过\]/',
            '/\[示爱\]/',
            '/\[可爱\]/',
            '/\[泪\]/',
            '/\[酷\]/',
        ];
        $replacements = [
            '<img src="/img/bq/y.gif">',
            '<img src="/img/bq/xhnf.gif">',
            '<img src="/img/bq/gz.gif">',
            '<img src="/img/bq/hax.gif">',
            '<img src="/img/bq/sx.gif">',
            '<img src="/img/bq/han.gif">',
            '<img src="/img/bq/cj.gif">',
            '<img src="/img/bq/bs.gif">',
            '<img src="/img/bq/bz.gif">',
            '<img src="/img/bq/cy.gif">',
            '<img src="/img/bq/hx.gif">',
            '<img src="/img/bq/shuai.gif">',
            '<img src="/img/bq/tx.gif">',
            '<img src="/img/bq/zm.gif">',
            '<img src="/img/bq/ng.gif">',
            '<img src="/img/bq/sa.gif">',
            '<img src="/img/bq/ka.gif">',
            '<img src="/img/bq/lei.gif">',
            '<img src="/img/bq/cool.gif">',
        ];
        echo preg_replace($patterns, $replacements, $string);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
