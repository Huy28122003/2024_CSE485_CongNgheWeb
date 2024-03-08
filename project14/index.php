<<<<<<< HEAD
<form>
    Employee ID : <input type="text"/>
    <br>
    LastName : <input type="text"/>
    <br>
    FirstName : <input type="text"/>
    <br>
    Title : <input type="text"/>
    <br>
    Suffix : <input type="text"/>
    <br>
    BirdDate : <input type="date"/>
    <br>
    HireDate : <input type="date"/>
    <br>
    Email : <input type="email"/>
    <br>
    Address : <input type="text"/>
    <br>
    City : <input type="text"/>
    <br>
    <label>Country</label> 
    <select>
        <?php
            $countries = array (
            "Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Anguilla",
            "Antigua & Barbuda",
            "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan",
            "Bahamas", "Bahrain",
            "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin",
            "Bermuda", "Bhutan",
            "Bolivia", "Bosnia & Herzegovina", "Botswana", "Brazil", "British Virgin
            Islands", "Brunei",
            "Bulgaria", "Burkina Faso", "Burundi", "Vietnam"
            );

            foreach($countries as $con){
                echo "<option value='$con'>$con</option>";
            }
        ?>
    </select>
</form>
=======
<?php
include 'head.php';

$countries = array(
    "Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Anguilla",
    "Antigua & Barbuda",
    "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan",
    "Bahamas", "Bahrain",
    "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin",
    "Bermuda", "Bhutan",
    "Bolivia", "Bosnia & Herzegovina", "Botswana", "Brazil", "British Virgin 
Islands", "Brunei",
    "Bulgaria", "Burkina Faso", "Burundi", "Vietnam"
);

?>
<div class="form-layout">
    <div class="container">
        <div class="title">
            <h2>Basic Info</h2>
        </div>
        <div class="main">
            <div class="title-info">
                <div class="label"><b>Employee ID</b></div>
                <div class="input">9</div>
            </div>
            <div class="title-info">
                <div class="label"><b>Last Name</b></div>
                <div class="input">Dodsworth</div>
            </div>
            <div class="title-info">
                <div class="label"><b>First Name</b></div>
                <div class="input">
                    <input type="text" style="width: 300px" placeholder="Anne">
                </div>
            </div>
            <div class="title-info">
                <div class="label" style="padding-top: 30px"><b>Gender</b></div>
                <div class="input">
                    <input type="radio"> Male <br>
                    <input type="radio"> Female <br>
                    <input type="radio"> XXX <br>
                    <input type="radio"> YYY <br>
                </div>
            </div>
            <div class="title-info">
                <div class="label"><b>Title</b></div>
                <div class="input">
                    <input type="text" style="width: 300px" placeholder="Sales Representative">
                </div>
            </div>
            <div class="title-info">
                <div class="label"><b>Suffix</b></div>
                <div class="input">
                    <input type="text" style="width: 300px" placeholder="Ms.">
                </div>
            </div>
            <div class="title-info">
                <div class="label"><b>HireDate</b></div>
                <div class="input">
                    <input type="date" style="width: 300px">
                </div>
            </div>
            <div class="title-info">
                <div class="label"><b>SSN # (if applicable)</b></div>
                <div class="input">
                    <input type="text" style="width: 300px" placeholder="">
                </div>
            </div>
            <div class="title-info">
                <div class="label"><b>Reports To</b></div>
                <div class="input">
                    <select class="form-select">
                        <option selected>Buchanan</option>
                        <?php foreach ($countries as $items):
                            echo '<option value="">' . $items . '</option>';
                        endforeach;
                        ?>
                    </select>
                </div>
            </div>
        </div>
        <div class="title">
            <h2>Contact Info</h2>
        </div>
        <div class="main">
            <div class="title-info">
                <div class="label"><b>Email</b></div>
                <div class="input">
                    <input type="email" style="width: 300px" placeholder="name@example.com">
                </div>
            </div>
            <div class="title-info">
                <div class="label"><b>Address</b></div>
                <div class="input">
                    <input type="text" style="width: 300px" placeholder="7 Houdstooth Rd.">
                </div>
            </div>
            <div class="title-info">
                <div class="label"><b>Region</b></div>
                <div class="input">
                    <input type="text" style="width: 300px" placeholder="">
                </div>
            </div>
            <div class="title-info">
                <div class="label"><b>Postal Code</b></div>
                <div class="input">
                    <input type="text" style="width: 300px" placeholder="WG2 7LT">
                </div>
            </div>
            <div class="title-info">
                <div class="label"><b>Country</b></div>
                <div class="input">
                    <select class="form-select">
                        <option selected>Russian Federation</option>
                        <?php foreach ($countries as $items):
                            echo '<option value="">' . $items . '</option>';
                        endforeach;
                        ?>
                    </select>
                </div>
            </div>
            <div class="title-info">
                <div class="label"><b>US Home Phone</b></div>
                <div class="input">
                    <input type="text" style="width: 300px" placeholder="(234)234-2342">
                </div>
            </div>
            <div class="title-info">
                <div class="label"><b>Photo</b></div>
                <div class="input">
                    <input type="text" style="width: 300px" placeholder="EmpID9.bmp">
                </div>
            </div>
        </div>
        <div class="title">
            <h2>Optional Info</h2>
        </div>
        <div class="main">
            <div class="title-info">
                <div class="label1" style="margin-right: 120px"><b>Notes</b></div>
                <div id="editor">
                    <p>Anne has a BA degree in English from St.Lawrence College. She is fluent in French and
                        Germany.ZZZ</p>
                </div>
            </div>
            <div class="title-info">
                <div class="label" style="margin-top: 20px"><b>Preferred Shift</b></div>
                <div class="input" style="margin-top: 20px">
                    <input type="checkbox" style="width: 30px"> Regular <br>
                    <input type="checkbox" style="width: 30px"> Gravy Yard
                </div>
            </div>
            <div class="title-info">
                <div class="label"><b>Active?</b></div>
                <div class="input">
                    <input type="checkbox" style="width: 30px">
                </div>
            </div>
            <div class="title-info">
                <div class="label"><b>Are you human?</b></div>
                <div class="input">
                    <b style="margin-left: 90px">Click to change</b><br>
                    <input type="text" style="width: 300px">
                </div>
            </div>
        </div>
    </div>
    <div class="footter">
        <div class="move">
            <button type="submit"><i class="fas fa-arrow-left"></i></button>
            <button type="submit"><i class="fas fa-arrow-right"></i></button>
            <br>
            <b>* required</b>
        </div>
        <div class="submit">
            <button type="submit"><i class="fas fa-check"></i> Submit</button>
            <button type="submit"><i class="fas fa-xmark"></i> Cancel</button>
        </div>
    </div>
</div>
<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
</script>
>>>>>>> main
