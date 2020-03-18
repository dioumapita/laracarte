{{-- on herite du layout app --}}
    
    @extends('layouts.app',['title' =>'about'])
        
        @section('content')
            <div class="container">
                <h2>What is {{ config('app.name') }} ???</h2>
                <p>
                    laracarte est une application cloner de
                    <a href="#">Laramap.com</a>
                </p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="alert alert-warning">
                            <strong>
                                <i class="fa fa-exclamation-triangle"></i>
                                Cette application à été conçu pour savoir la position des utilisateurs de laravel!!!
                            </strong>
                        </div>
                    </div>
                </div>
                <p>Nhesiter à contribuer à lamerioration du 
                    <a href="https://github.com/dioumapita/laracarte">code source</a>
                </p>

                <hr>

                <h2>What is laramap ???</h2>
                    <p>Laramap est le site web qui à inspirer {{ config('app.name') }}.</p>
                    <p>Plus dinformations <a href="#">cliquez ici</a></p>
                
                <hr>
                
                <h2>Quels sont les outils et services utilisés dans {{ config('app.name') }} ???</h2>
                    <p>
                        Fondamentalement, il est construit sur laravel et bootstrap.
                        Mais il y a un tas de services utilisés pour le courrier électronique et dautres sections
                    </p>
                    <ul>
                        <li>Laravel</li>
                        <li>Bootstrap</li>
                        <li>Amazon S3</li>
                        <li>Mandrill</li>
                        <li>Google Maps</li>
                        <li>Gravatar</li>
                        <li>Antoy Martins Geolocalisation package</li>
                        <li>Michel Forteins Markdown Parser Package</li>
                        <li>Heroku</li>
                    </ul>
            </div>
         
        @stop
        
    