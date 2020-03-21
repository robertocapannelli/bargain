<?php

namespace App\Http\Controllers;

use App\Watch;
use Illuminate\Http\Request;


class WatchesController extends Controller {

    public function __construct() {
        $this->middleware( 'auth' );
    }

    public function index() {

        return view( 'watches.index', [
            'watches' => Watch::latest()->get()
        ] );
    }

    public function create() {
        return view( 'watches.create' );
    }

    public function store() {
        Watch::create( $this->validateWatch() );

        return redirect( route( 'watches.index' ) );
    }

    public function show( Watch $watch ) {
        return view( 'watches.show', [
            'watch' => $watch
        ] );
    }

    public function edit( Watch $watch ) {
        return view( 'watches.edit', [
            'watch' => $watch
        ] );
    }

    public function update( Watch $watch ) {
        $watch->update( $this->validateWatch() );

        return redirect( $watch->path() );
    }

    public function destroy( $id ) {
        //
    }

    /**
     * @return array
     */
    protected function validateWatch() : array {
        return request()->validate( [
            'name'           => 'required',
            'brand'          => 'required',
            'reference'      => 'required',
            'year'           => [
                'integer',
                'min:1900',
                'max:' . date( 'Y' )
            ],
            //'warranty'       => 'required',
            'featured_image' => [
                'image'
            ]
        ] );
    }
}
