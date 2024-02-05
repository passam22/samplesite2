@extends('template')

@section('content')
<h2>{{ $edit ? 'Edit' : 'Add' }} Customer</h2>
<div class="row">
    <form method="post" action="{{ $edit ? url('/update_record') : url('/insert_record') }}">
        @csrf
        <input type="hidden" name="customer_id" value="{{ $edit ? $info->id : '' }}"/>
        <div class="mb-3 mt-3">
            <label class="form-label">Firstname: <small class="text-danger">*</small></label>
            <input type="text" class="form-control"  required name="firstname" value="{{ $edit ? $info->firstname : '' }}">
        </div>

        <div class="mb-3 mt-3">
            <label class="form-label">Middlename:</label>
            <input type="text" class="form-control" name="middlename" value="{{ $edit ? $info->middlename : '' }}">
        </div>

        <div class="mb-3 mt-3">
            <label class="form-label">Lastname: <small class="text-danger">*</small></label>
            <input type="text" class="form-control" required name="lastname" value="{{ $edit ? $info->lastname : '' }}">
        </div>

        <div class="mb-3 mt-3">
            <label class="form-label">Street: <small class="text-danger">*</small></label>
            <input type="text" class="form-control" required name="street" value="{{ $edit ? $info->street : '' }}">
        </div>

        <div class="mb-3 mt-3">
            <label class="form-label">Barangay: <small class="text-danger">*</small></label>
            <input type="text" class="form-control" required name="barangay" value="{{ $edit ? $info->barangay : '' }}">
        </div>

        <div class="mb-3 mt-3">
            <label class="form-label">Municipality: <small class="text-danger">*</small></label>
            <select class="form-select" name="municipality" required>          
                @if($edit)
                    <option selected >{{ $info->municipality }}</option>
                    <option disabled>_________</option>
                @endif
                <option >Bulusan</option>
                <option>Bulan</option>
                <option>Barcelona</option>
                <option>Casiguran</option>
                <option>Castilla</option>
                <option>Donsol</option>
                <option>Gubat</option>
                <option>Irosin</option>
                <option>Juban</option>
                <option>Magallanes</option>
                <option>Matnog</option>
                <option>Pilar</option>
                <option>Prieto Diaz</option>
                <option>Santa Magdalena</option>
                <option>Sorsogon City</option>
            </select>
        </div>

        <div class="mb-3 mt-3">
            <label class="form-label">Civil Status: <small class="text-danger">*</small></label>
            <select class="form-select" name="civil_status" required>   
                @if($edit)
                    <option selected >{{ $info->civil_status }}</option>
                    <option disabled>_________</option>
                @endif             
                <option>Single</option>
                <option>Married</option>  
                <option>Widowed</option>   
                <option>Divorced</option>              
            </select>
        </div>

        <div class="mb-3 mt-3">
            <label class="form-label">Date of Birth: <small class="text-danger">*</small></label>
            <input type="date" class="form-control" required name="date_of_birth" value="{{ $edit ? $info->date_of_birth : '' }}">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    
    
    
</div>

@endsection