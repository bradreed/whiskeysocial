@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1>Contribute</h1>
            <p>Looking to add to extensive collection? Thats great! Just give us the details on the item we're missing and we'll add it to our database ASAP</p>
        </div>
    </div>
    
    <div class="row justify-content-center">
        <div class="col-md-12">
            <form>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="name">Spirit Name</label>
                            <input type="text" class="form-control" id="spiritName" aria-describedby="spiritName" placeholder="Spirit Name">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description"></textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="distiller">Spirit Type</label>
                            <select name="distiller" id="distiller" class="form-control">
                                <option selected disabled="">Please Select</option>
                                <option>Absinthe</option>
                                <option>Brandy</option>
                                <option>Cognac</option>
                                <option>Gin</option>
                                <option>Liqueur</option>
                                <option>Rum</option>
                                <option>Tequila</option>
                                <option>Vodka</option>
                                <option>Whiskey</option>
                                <option>Other</option>                                
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="name">Alcohol by Volume</label>
                            <input type="text" class="form-control" id="abv" aria-describedby="abv" placeholder="ABV">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="distiller">Distiller</label>
                            <select name="distiller" id="distiller" class="form-control">
                                <option selected disabled="">Please Select</option>
                                                       
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="image">Image</label>
                            <input type="file" class="form-control-file" id="image">
                        </div>
                    </div> 
                </div>
                <div class="form-group">
                    <input type="submit" name="Submit" class="">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection