<?php

namespace App\Http\Controllers;

use App\Watch;
use Illuminate\Http\Request;


class WatchesController extends Controller {

    public function __construct() {
        $this->middleware( 'auth' );
    }

    public function index() {

        $watches = Watch::latest()
            ->get();

        return view( 'watches.index', [
            'watches' => $watches
        ] );
    }

    public function create() {
        return view( 'watches.create' );
    }

    public function store( Request $request ) {
        $data = $request->validate( [
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
                'required',
                'image'
            ]
        ] );

        Watch::create( $data );

        return redirect( '/watches' );
    }

    public function show( $id ) {

        $watch = Watch::find( $id );

        return view( 'watches.show', [
            'watch' => $watch
        ] );
    }

    public function edit( $id ) {

        $watch = Watch::find( $id );

        return view( 'watches.edit', [
            'watch' => $watch
        ] );
    }

    public function update( $id ) {

        $watch = Watch::find( $id );

        $watch->name = request( 'name' );
        $watch->brand = request( 'brand' );
        $watch->reference = request( 'reference' );
        $watch->year = request( 'year' );
        $watch->featured_image = request( 'featured_image' );

        $watch->save();

        return redirect( '/watches/', $watch->id );
    }

    public function destroy( $id ) {
        //
    }
}
