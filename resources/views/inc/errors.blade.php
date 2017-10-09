
                @if ($errors && $errors->any())
                    <div class="row center-block">
                        <div class="col-md-6 center-block">
                            <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                            </div>
                        </div>
                    </div>
                
            @endif