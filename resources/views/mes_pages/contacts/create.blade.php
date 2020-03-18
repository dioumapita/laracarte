{{-- on herite du layout app --}}
    
    @extends('layouts.app',['title'=>'contact'])
        
        @section('content')
            <div class="container">

                
                    <div class="row">
                        <div class="col-md-7 col-md-offset-5 col-sm-10 col-sm-offset-1">
                            <h2>Entrez En Contact</h2>
                            <p class="muted">
                                Si vous rencontrez des problèmes avec ce service,
                                <a href="#">
                                    Veuillez demander de laide
                                </a>
                            </p>
                            <form>
                                <!-- Nom -->
                                    <div class="form-group">
                                        <label for="name"><b>Nom</b></label>
                                        <input type="name" class="form-control" name="email" id="name" placeholder="Votre nom">
                                    </div>
                                <!-- Email -->
                                    <div class="form-group">
                                        <label for="email"><b>Email</b></label>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Votre email">
                                    </div>
                                <!-- Message -->
                                    <div class="form-group">
                                        <label for="message"><b>Message</b></label>
                                        <textarea class="form-control" name="message" id="message" cols="30" rows="12"></textarea>
                                    </div>

                                <button type="submit" class="btn btn-primary btn-block">Envoyer &raquo;</button>
                            </form>
                        </div>
                    </div>

            </div>
        @stop
        
    