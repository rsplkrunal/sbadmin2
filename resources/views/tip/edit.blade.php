@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Tip of the day') }}</div>

                <div class="card-body">
                    <form method="POST" action={{ route('tip.update',$tip->id) }}>
                        @method('PUT')
                        @csrf

                        <div class="form-group row">
                            <label for="company_id" class="col-md-4 col-form-label text-md-right">{{ __('Select Company') }}</label>

                            <div class="col-md-6">
                                <select required class="form-control" name="company_id">
                                    <option value="">--Select Company--</option>
                                    @foreach ($companies as $key => $value)
                                    <option value={{ $value['id'] }} @if ($value['id']==$tip->company_id) selected="selected" @endif>{{ $value['name'] }}</option>
                                    @endforeach
                                </select>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tip_date" class="col-md-4 col-form-label text-md-right">Tip Day</label>
                            <div class="col-md-6">
                                <select required name="tip_date" class="form-control">
                                    <option value="">--Select Day--</option>
                                    @foreach ($days as $key => $value)
                                    <option value={{ $key }} @if ($key==old('tip_date', $value)) selected="selected" @endif>{{ $value }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Details') }}</label>

                            <div class="col-md-6">
                                <textarea name="details" class="form-control">{{$tip->details}}</textarea>
                                
                                @error('details')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <!--div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div-->

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection