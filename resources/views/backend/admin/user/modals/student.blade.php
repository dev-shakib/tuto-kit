<div class="modal fade" id="modal_show" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"> @if(isset($user)) Update User @else Create  @endif</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          <div class="card">

            <!-- /.card-header -->
            <div class="card-body">
                <div id="form_body">
                @if(isset($user))
                <div class="text-center">
                    <img class="rounded-circle" src="{{ asset('images/profile/'.$user->img) }}" width="350" height="280" alt="Profile.jpg">
                </div>
                <br>
                @endif
                <div class="form-group">
                    <label for="studentformfield">Name</label>
                    <input type="text" class="form-control" name="name" id="studentformfield" placeholder="Enter Full Name" value="<?php echo isset($user) ? $user->name :'' ; ?>">
                </div>
                <div class="form-group">
                    <label for="studentformfieldemail">Email</label>
                    <input type="email" class="form-control" name="email" id="studentformfieldemail" placeholder="Enter Email" value="<?php echo isset($user) ? $user->email :'' ; ?>">
                </div>
                <div class="form-group">
                    <label for="studentformfieldphone">Phone</label>
                    <input type="text" class="form-control" name="phone" id="studentformfieldphone" placeholder="Enter Phone Number" value="<?php echo isset($user) ? $user->phone :'' ; ?>">
                </div>
                <div class="form-group">
                    <label for="studentformfieldcourse">Class</label>
                    <select class="form-control" name="course" id="studentformfieldcourse" >
                        <option value=""></option>
                        @foreach ($class as $row)
                            <option value="{{ $row->id }}"  <?php echo isset($user) && $user->course == $row->id ? 'selected' :'' ; ?>>{{ $row->title }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="group-form">
                        <label for="">Parent's Phone</label>
                        <input type="text" class="form-control" name="parentPhone"  value="<?php echo isset($user) ? $user->parentPhone :'' ; ?>" placeholder="Parent' Phone">
                    </div>
                @if(!isset($user))
                <div class="form-group">
                    <label for="studentformfieldpassword">Password</label>
                    <input type="password" class="form-control" name="password" id="studentformfieldpassword" placeholder="Enter Password" value="">
                </div>
                @endif
                </div>
                <input type="hidden" name="role_name" value="Student">
                @if(isset($user))
                <input type="hidden" name="id" value="<?php echo isset($user) ? $user->id : '';?>">
                @endif
                <div class="form-group">
                   <button type="submit" class="btn btn-primary">@if(!isset($user))Create User @else Update User @endif</button>
                </div>
            </div>
        </div>


          </div>
         </div>
       </div>
 </div>