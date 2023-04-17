<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student|certificate upload</title>
    <link rel="stylesheet" href="/certificateupload.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" />
</head>
<body>
  @include('sweetalert::alert')
  @include('Student/studentheader')
    <div class="create">
        <div class="m-4">
          <form action="{{route('student.certiupload')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
              <label for="inputEmail" class="col-sm-2 col-form-label">Certifcate Name</label>
              <div class="col-sm-10">
                <input type="text" name="certiname" class="form-control Certifcate" id="inputCertifcate" placeholder="Certifcate Name" required>
              </div>
            </div>
      
            <div class="row mb-3">
              <label for="inputPassword" class="col-sm-2 col-form-label">Event name</label>
              <div class="col-sm-10">
                <input type="text" name="event" class="form-control Event" id="inputEvent" placeholder="Event name" required>
              </div>
            </div>
            <div class="row mb-3">
              {{-- <label for="inputPassword" class="col-sm-2 col-form-label">Description</label>
              <div class="col-sm-10">
                <input type="text" name="description" class="form-control Description" id="inputDescription" placeholder="Description about you certificate" required>
              </div> --}}
               <label for="inputPassword" class="col-sm-2 col-form-label">Type</label>
              <div class="col-sm-10">
              <select name="type" id="select" >
                <option selected hidden>Choose Type</option>
                {{-- @foreach ($department as $o)
                    <option value="{{ $o->department }}">{{ $o->department }}</option>
                @endforeach --}}

                
                <option value="Technical">Technical</option>
                <option value="Cultural">Cultural</option>
                <option value="Sports">Sports</option>
                <option value="Leadership and management">Leadership and management</option>
                {{-- <option value="5"></option>
                <option value="6">6 </option>
                <option value="7">7</option>
                <option value="8">8</option>  --}}
                {{-- <option value="IC"> Instrumentation and Control </option> --}}
            </select>
          </div>
          <div class="row mb-3"></div>
               <label for="inputPassword" class="col-sm-2 col-form-label ">Co-ordinator</label>
              <div class="col-sm-10">
              <select name="coordinator" id="select" >
                <option selected hidden>Choose Co-ordinator</option>
                {{-- @foreach ($department as $o)
                    <option value="{{ $o->department }}">{{ $o->department }}</option>
                @endforeach --}}

                @foreach($faculty as $f)
                <option value="{{$f['name']}}">{{$f['name']}}</option>
                @endforeach
                {{-- <option value="Cultural">Cultural</option>
                <option value="Sports">Sports</option>
                <option value="Leadership and management">Leadership and management</option> --}}
                {{-- <option value="5"></option>
                <option value="6">6 </option>
                <option value="7">7</option>
                <option value="8">8</option>  --}}
                {{-- <option value="IC"> Instrumentation and Control </option> --}}
            </select>
          </div>
          <div class="row mb-3"></div>
            <label for="inputPassword" class="col-sm-2 col-form-label ">Level</label>
            <div class="col-sm-10">
            <select name="level" id="select" >
              <option selected hidden>Choose Level</option>
              {{-- @foreach ($department as $o)
                  <option value="{{ $o->department }}">{{ $o->department }}</option>
              @endforeach --}}

              
              <option value="Internantional">International</option>
              <option value="National">National</option>
              <option value="State">State</option>
              <option value="College">College</option>
              {{-- <option value="5"></option>
              <option value="6">6 </option>
              <option value="7">7</option>
              <option value="8">8</option>  --}}
              {{-- <option value="IC"> Instrumentation and Control </option> --}}
          </select>
            </div>
            <!-- <div class="row mb-3">
              <label for="inputPassword" class="col-sm-2 col-form-label">Contact Number</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="inputPassword" placeholder="Contact Number" required>
              </div>
            </div> -->
            

                <div class="button">
                  
                  <label for="inputPassword" class="col-sm-2 col-form-label upcerti ">  Upload Certificate</label>
                   <input type="file" name="file" id="upload" class="btn btn-secondary">
                    {{-- <button class="btn btn-secondary"> Upload Certificate</button>  --}}
                 
                  
                </div>
                <div class="col-sm-12 offset-sm-2 button mt-4">
                    <button type="submit" class="btn btn-success">submit</button>
                  </div>
              
            </form>
          </div>
        </div>
</body>
</html>