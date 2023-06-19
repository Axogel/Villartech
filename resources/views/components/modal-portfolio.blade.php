
<div class="modal" id="{{ $portfolioID }}">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">{{ $portafolio->name }}</h4>
                                </div>

                                <div class="modal-body modal-custom">
                                    <div class="modal-custom-body">
                                    <img style="width:100%;" src="{{ asset('/storage/' . $portafolio->formattedImage) }}" alt="">
                                    </div>
                                    <div class="modal-custom-content">
                                        <div class="modal-custom-description">
                                            <strong class="modal-custom-title">{{__("Description")}}:</strong>
                                            <p>{{ $portafolio->description }}</p>
                                        </div>
                                        <div class="modal-custom-skills">
                                            <strong class="modal-custom-title">{{__("Skills")}}:</strong>
                                            @foreach (explode(',', $portafolio->skills) as $portfolioskill)
                                                <span class="badge badge-secondary">{{ $portfolioskill }}</span>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                    
                                <div class="modal-footer">
                                    <a href="{{ $portafolio->url }}" target="_blank" class="btn btn-info">
                                       {{__("GoToSite")}} 
                                    </a>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">{{__("Close")}}</button>
                                </div>

                            </div>
                        </div>
                    </div>
