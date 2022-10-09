<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\BookingRoom;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $booking = Booking::all();
        return $booking;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $booking = new Booking();
        $booking->user_fullname = $request->fullname;
        $booking->email = $request->email;
        $booking->price = $request->price;
        $bookingSaved = $booking->save();

        if($bookingSaved){
            $bookingRoom = new BookingRoom();
            $bookingRoom->booking_id = $booking->id;
            $bookingRoom->room_id = $request->room_id;
            $bookingRoomSaved = $bookingRoom->save();

            if($bookingRoomSaved){
                return ['msg' => 'exito'];
            } else {
                return ['msg' => 'No guardó bookingRoom'];
            }

        } else {
            return ['msg' => 'No guardó booking'];
        }
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
