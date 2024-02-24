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