@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="container-wrapper">
            <div class="section-title mt-4">
                <h2>Cases</h2>
            </div>
            <div class="row">
                @foreach ($cases as $case)
                    <div class="col-md-6 my-2">
                        <div class="card card-default">
                            <div class="card card-header">{{ $case->title }}</div>
                            <div class="card card-body">
                                {{-- {{ $case->title }} --}}
                                <span class=""><strong>Description of the Case :
                                    </strong>
                                    <p>{!! $case->description !!}</p>
                                </span>
                                <span class="card-text"><strong>Next Hearing :
                                    </strong>{{ $case->next_hearing }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="section-title mt-4">
                    <h2>Cases Updates</h2>
                </div>
                @foreach ($caseupdates as $caseupdate)
                    <div class="col-md-6">
                        <div class="card card-body mb-2">
                            <strong>
                                Description:
                            </strong>
                            <p>{!! $caseupdate->description !!}</p>
                            <span class="card-text"><strong>Next Hearing :
                                </strong>{{ $case->next_hearing }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
