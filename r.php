<!DOCTYPE html>
<html>
<head>
    <title>Dropdown pakistan</title>
</head>
<body>
    <form method="post" action="">
        <!-- Dropdown for selecting a country -->
        <select name="country" onchange="this.form.submit()">
            <option value="">Select Country</option>
            <?php
            // Sample array of countries
            $countries = array(
                'PAK' => 'Pakistan',
                'CA' => 'Canada',
                'UK' => 'United Kingdom',
                'AU' => 'Australia',
                // Add more countries as needed
            );

            // Loop through countries and generate options for the dropdown
            foreach ($countries as $code => $name) {
                echo "<option value='$code'>$name</option>";
            }
            ?>
        </select>
        <br><br>

        <?php if(isset($_POST['country']) && $_POST['country'] != ""): ?>
            
            <!-- Dropdown for selecting a province -->
            <select name="province" onchange="this.form.submit()">
                <option value="">Select Province</option>
                <?php
                // Sample array of provinces for different countries
                $provincesByCountry = array(
                    'PAK' => array(
                        'PUN' => 'Punjab',
                        'KPK' => 'Khyber Pakhtunkhwa',
                        'GB' => 'Gilgit-Baltistan',
                        // Add more provinces for Pakistan as needed
                    ),
                    'CA' => array(
                        'ON' => 'Ontario',
                        'QC' => 'Quebec',
                        'BC' => 'British Columbia',
                        // Add more provinces for Canada as needed
                    ),
                    'UK' => array(
                        'ENG' => 'England',
                        'SCO' => 'Scotland',
                        'WAL' => 'Wales',
                        // Add more provinces for the United Kingdom as needed
                    ),
                    // Add more countries with their provinces as needed
                );

                // Fetch the selected country code from the POST request
                $selectedCountry = $_POST['country'];

                // Check if provinces exist for the selected country
                if(isset($provincesByCountry[$selectedCountry])) {
                    // Loop through provinces for the selected country and generate options for the dropdown
                    foreach($provincesByCountry[$selectedCountry] as $code => $name) {
                        echo "<option value='$code'>$name</option>";
                    }
                } else {
                    echo "<option value=''>No provinces available</option>";
                }
                ?>
            </select>
        <?php endif; ?>
        <br><br>

        <!-- Similarly, add more dropdowns for division, district, tehsil, and city here -->

        
        <!-- Submit button -->
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
