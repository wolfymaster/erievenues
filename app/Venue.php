<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    
    
    public function documents() 
    {
        //Return documents (e.g. menu, flyer, etc.)
        return $this->hasMany('App\Document');
    } 

    public function images(){
        //Images associated with venue (spaces may have specific images as well)
        return $this->hasMany('App\Image');
    }

    public function ownershipTypes()
    {
        // e.g. locally owned, veteran owned, woman owned    
        return $this->hasMany('App\OwnershipType');
    }
    
    public function parkingOptions()
    {
        //paved lot, street parking, etc.     
        return $this->hasMany('App\ParkingOption');
    }

    public function paymentPolicies()
    {
        //credit card, checks only, upfront payment
        return $this->hasMany('App\PaymentPolicy');
    }

    public function restroomTypes()
    {
        //family restrooms, private restrooms, handicapped accessible
        return $this->hasMany('App\RestroomType');
    }

    public function reviews()
    {
        //Reviews about the venue, spaces have their own reviews also
        return $this->hasManyThrough('App\User', App\Review);
    }

    public function serviceOptions()
    {  
         //e.g. catering available, alcohol bar, servers available, projector, etc.
        return $this->hasMany('App\ServiceOption');
    }

    
    public function spaces() 
    {
        //Spaces within the venue available for specific rent
        return $this->hasMany('App\Space');
    } 

    public function users()
    {
        //Users associated with venue submission (e.g. venue owner, point of contact)
        return $this->hasMany('App\User');
    }

    public function venueType()
    {
        //e.g. restauraunt, distillery, winery, brewery, office, coworking location, etc.
        return $this->hasOne('App\VenueType');
    }
    


}
