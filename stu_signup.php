<!-- form start -->
<form role="form" id="register-form" autocomplete="off">
         
         <div class="form-header">
         <!-- form header -->       
         </div>
         
         <div class="form-body">
                          
          <!-- form body will be here, input controls -->              
              
         </div>
            
         <div class="form-footer">
            <!-- form footer, let say for submit button -->
         </div>

         </form>

         <div class="form-group">
                <div class="input-group">
                <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                <input name="name" type="text" class="form-control" placeholder="Username">
                </div>
                <span class="help-block" id="error"></span>
        </div>

        <!-- form start -->
        <form role="form" id="register-form" autocomplete="off">
         
         <div class="form-header">
          <h3 class="form-title"><i class="fa fa-user"></i> Sign Up</h3>
                      
         <div class="pull-right">
             <h3 class="form-title"><span class="glyphicon glyphicon-pencil"></span></h3>
         </div>
                      
         </div>
         
         <div class="form-body">
                      
            <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                   <input name="name" type="text" class="form-control" placeholder="Username">
                   </div>
                   <span class="help-block" id="error"></span>
              </div>
                        
              <div class="form-group">
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                   <input name="email" type="text" class="form-control" placeholder="Email">
                   </div> 
                   <span class="help-block" id="error"></span>                     
              </div>
                        
              <div class="row">
                        
                   <div class="form-group col-lg-6">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                        <input name="password" id="password" type="password" class="form-control" placeholder="Password">
                        </div>  
                        <span class="help-block" id="error"></span>                    
                   </div>
                            
                   <div class="form-group col-lg-6">
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                        <input name="cpassword" type="password" class="form-control" placeholder="Retype Password">
                        </div>  
                        <span class="help-block" id="error"></span>                    
                   </div>
                            
             </div>
                        
                        
            </div>
            
            <div class="form-footer">
                 <button type="submit" class="btn btn-info">
                 <span class="glyphicon glyphicon-log-in"></span> Sign Me Up !
                 </button>
            </div>


            </form>




<script>// JavaScript Validation For Registration Page

$('document').ready(function()
{    
   // name validation
    var nameregex = /^[a-zA-Z ]+$/;
   
   $.validator.addMethod("validname", function( value, element ) {
       return this.optional( element ) || nameregex.test( value );
   }); 
   
   // valid email pattern
   var eregex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
   
   $.validator.addMethod("validemail", function( value, element ) {
       return this.optional( element ) || eregex.test( value );
   });
   
   $("#register-form").validate({
     
    rules:
    {
    name: {
     required: true,
     validname: true,
     minlength: 4
    },
    email: {
     required: true,
     validemail: true
    },
    password: {
     required: true,
     minlength: 8,
     maxlength: 15
    },
    cpassword: {
     required: true,
     equalTo: '#password'
    },
     },
     messages:
     {
    name: {
     required: "Please Enter User Name",
     validname: "Name must contain only alphabets and space",
     minlength: "Your Name is Too Short"
       },
       email: {
       required: "Please Enter Email Address",
       validemail: "Enter Valid Email Address"
        },
    password:{
     required: "Please Enter Password",
     minlength: "Password at least have 8 characters"
     },
    cpassword:{
     required: "Please Retype your Password",
     equalTo: "Password Did not Match !"
     }
     },
     errorPlacement : function(error, element) {
     $(element).closest('.form-group').find('.help-block').html(error.html());
     },
     highlight : function(element) {
     $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
     },
     unhighlight: function(element, errorClass, validClass) {
     $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
     $(element).closest('.form-group').find('.help-block').html('');
     },
     
     submitHandler: function(form) {
                    form.submit();
     alert('ok');
                }
     }); 
 })</script>            