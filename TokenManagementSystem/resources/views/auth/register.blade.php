@extends('layouts.app')

@section('content')

<div id="main">
<h1 style="text-align: center; color: violet; font-size: 50px;" > <b>Create a new Account</b> </h1>

    <div id="taps">
       <a href="#" class="ssignin s2"  onclick="usertype('Student')" style="text-decoration: none;"> <b> Student</b></a>
      <!-- <input type="radio" class="radio" name="loginas" id="rb1" value="Student"> -->
      <a href="#" class="tsignin"   onclick="usertype('Teacher')" style="text-decoration: none;"> <b>Teacher</b> </a>
      <!-- <input type="radio" class="radio" name="loginas" id="rb2" value="Teacher" > -->
    </div>


    <!-- --------------------------------------------------------------------------FOR STUDENT'S REGISTRATION ------------------------------------------------------------------------>

    <div class="middle">
      <!-- <section> -->
        <form class="" action="{{ route('register') }}" method="POST" onsubmit="return validation1()">
            @csrf

          <table>
            <tr>
              <td><input type="text"  class="" name="sName" value="" placeholder="  Full name" id="sName" onchange="isEmpty1()">
              </td>
            </tr>
            <tr>
              <td> <span style="color:red; font-size:18px;" id="sn" ></span> </td>
            </tr>
            <tr>
              <td>   <br>  <br> <br>  </td>
            </tr>
            <tr>
              <td><input type="email" class="@error('sEmail') is-invalid @enderror" name="sEmail" value="{{ old('sEmail') }}" placeholder="  Email"  id="sEmail" onchange="isEmpty2()">
              </td>
            </tr>
            <tr>
              <td> 
                <span id='se' style="color:red; font-size: 18px;" >
                  @error('sEmail')
                    <span class="">
                      <alert>{{ str_replace('s email','email',$message) }}</alert>
                    </span>
                  @enderror
                </span>
                <span id='sspanemail' style="color:red; font-size: 18px;" >
                  @error('email')
                    <span class="">
                      <alert>{{ $message }}</alert>
                    </span>
                  @enderror
                </span> 
              </td>
            </tr>

            <tr>
              <td>  <br>  <br>  <br>  </td>
            </tr>

            <tr>
              <td>
                <select class="year" name="sYear" id="sYear" onchange="isEmpty3()">
                    <option value="">___Select Year___</option>
                    <option value="FE">First year</option>
                    <option value="SE">Second year</option>
                    <option value="TE">Third year</option>
                    <option value="BE">Fourth year</option>
                </select>
              </td>
            </tr>

            <tr>
              <td> <span id='sy' style="color:red; font-size: 18px;" > </span> </td>
            </tr>

            <tr>
              <td> <br> <br>  <br>  </td>
            </tr>

            <tr>
              <td>
                <select class="branch" name="sBranch" id="sBranch" onchange="isEmpty4()">
                                  <option value="">___Select Branch___</option>
                                  <option value="comp">Computer </option>
                                  <option value="mech">Mechanical</option>
                                  <option value="extc">Extc</option>
                                  <option value="instru">Instrumentation</option>
                                  <option value="civil">Civil  </option>
                              </select>

              </td>
            </tr>

            <tr>
              <td> <span id='sb' style="color:red; font-size: 18px;" > </span> </td>
            </tr>


            <tr>
              <td> <br> <br> <br></td>
            </tr>
            <tr>
                <td> <input type="text" class="@error('sRollNo') is-invalid @enderror" name="sRollNo" value="{{ old('sRollNo') }}" placeholder="  Roll no" id="sRollNo" onchange="isEmpty6()">
                </td>
            </tr>
            <tr>
              <td> 
                <span id='srn' style="color:red; font-size: 18px;" >
                  @error('sRollNo')
                    <span class="" role="">
                      <alert>{{ str_replace('s roll','roll',$message) }}</alert>
                    </span>
                  @enderror
                </span>
              </td>
            </tr>

            <tr>
              <td> <br> <br> <br></td>
            </tr>
            <tr>
                <td><input type="password" name="sPassword" value="" placeholder="  New Password" id="sPassword" onchange="isEmpty5()" >
                </td>
            </tr>
            <tr>
              <td> <span id='spass' style="color:red; font-size: 18px;" > </span> </td>
            </tr>

            <tr>
              <td> <br> <br> <br></td>
            </tr>


            <tr>
              <td><input type="submit"  name="sRegister" class="register" value="Register"></td>
            </tr>

          </table>

        </form>

      <!-- </section> -->
    </div>


      <!-- ------------------------------------------------------------------------------FOR TEACHER'S REGITRATION ----------------------------------------------------------------->


  <div class="middle1">
    <!-- <section> -->
      <form class="" action="{{ route('register') }}"  method="POST" onsubmit="return validation2()"  >
        @csrf

        <table>
          <tr>
            <td><input type="text" name="tName" value="" placeholder="  Full name" id="tName" onchange="isEmpty11()"></td>
          </tr>

          <tr>
              <td> <span id='tn' style="color:red; font-size: 18px;" > </span> </td>
          </tr>
           <tr>
             <td>   <br>  <br> <br>  </td>
           </tr>
          <tr>
            <td><input type="text" class="@error('tEmail') is-invalid @enderror" name="tEmail" value="{{ old('tEmail') }}" placeholder="  Email" id="tEmail" onchange="isEmpty22()"></td>
          </tr>
          <tr>
            <td>
              <span id='te' style="color:red; font-size: 18px;" >
                @error('tEmail')
                  <span class="">
                    <alert>{{ str_replace('t email','email',$message) }}</alert>
                  </span>
                @enderror
              </span>
              <span style="color:red; font-size: 18px;" >
                  @error('email')
                    <span id='tspanemail' class="">
                      <alert>{{ $message }}</alert>
                    </span>
                  @enderror
              </span>
             </td>
          </tr>
          <tr>
            <td>  <br>  <br>  <br>  </td>
          </tr>
          {{--<tr>
            <td>
                          <select class="year" name="tBranch" id="tBranch" onchange="isEmpty33()">
                            <option value="">___Select Branch___</option>
                            <option value="comp">Computer </option>
                            <option value="mech">Mechanical</option>
                            <option value="extc">Extc</option>
                            <option value="instru">Instrumentation</option>
                            <option value="civil">Civil  </option>
                          </select>
            </td>
          </tr>
          <tr>
            <td> <span id='tb' style="color:red; font-size: 18px;" > </span> </td>
          </tr>
          <tr>
            <td> <br> <br>  <br>  </td>
          </tr>--}}
          <tr>
            <td><input type="password" name="tPassword" value="" placeholder=" New Password" id="tPassword" onchange="isEmpty44()"></td>
          </tr>
          <tr>
            <td> <span id='tpass' style="color:red; font-size: 18px;" > </span> </td>
          </tr>
          <tr>
            <td> <br> <br> <br></td>
          </tr>
          <tr>
            <td><input type="submit" name="tRegister" value="Register" class="register" ></td>
          </tr>
        </table>
      </form>

    <!-- </section> -->
  </div>
  <h3>Have an account? <a href="{{ route('login') }}">Login </a> </h3>

</div>

<script type="text/javascript" >
      $(document).ready(function(){
          $(".tsignin").click(function(){
              $(".middle1").show();
              $(".middle").hide();
              $(".tsignin").addClass('s2');
              $(".ssignin").removeClass('s2');

          });

          $(".ssignin").click(function(){
              $(".middle").show();
              $(".middle1").hide();
              $(".ssignin").addClass('s2');
              $(".tsignin").removeClass('s2');
          });

      });

</script>
@endsection()
