<!DOCTYPE html>
<html>
<head>
    <title>Dropdowns for Locations</title>
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
            <br><br>

            <?php if(isset($_POST['province']) && $_POST['province'] != ""): ?>
                <!-- Dropdown for selecting a division -->
                <select name="division" onchange="this.form.submit()">
                    <option value="">Select Division</option>
                    <?php
                    // Sample array of divisions for different provinces
                    $divisionsByProvince = array(
                        'PUN' => array(
                            'LDN' => 'Lahore Division',
                            'FSB' => 'Faisalabad Division',
                            // Add more divisions for Punjab as needed
                        ),
                        'KPK' => array(
                            'PDI' => 'Peshawar Division',
                            'SWA' => 'Swat Division',
                            // Add more divisions for KPK as needed
                        ),
                        'GB' => array(
                            'GBD' => 'Gilgit Division',
                            'DSK' => 'Diamer Division',
                            // Add more divisions for Gilgit-Baltistan as needed
                        ),
                        // Add more provinces with their divisions as needed
                    );

                    // Fetch the selected province code from the POST request
                    $selectedProvince = $_POST['province'];

                    // Check if divisions exist for the selected province
                    if(isset($divisionsByProvince[$selectedProvince])) {
                        // Loop through divisions for the selected province and generate options for the dropdown
                        foreach($divisionsByProvince[$selectedProvince] as $code => $name) {
                            echo "<option value='$code'>$name</option>";
                        }
                    } else {
                        echo "<option value=''>No divisions available</option>";
                    }
                    ?>
                </select>
                <br><br>

                <?php if(isset($_POST['division']) && $_POST['division'] != ""): ?>
                    <!-- Dropdown for selecting a district -->
                    <select name="district" onchange="this.form.submit()">
                        <option value="">Select District</option>
                        <?php
                        // Sample array of districts for different divisions
                        $districtsByDivision = array(
                            'LDN' => array(
                                'LHR' => 'Lahore',
                                'GRW' => 'Gujranwala',
                                // Add more districts for Lahore Division as needed
                            ),
                            'PDI' => array(
                                'PES' => 'Peshawar',
                                'NOW' => 'Nowshera',
                                // Add more districts for Peshawar Division as needed
                            ),
                            'GBD' => array(
                                'GBN' => 'Gilgit',
                                'SKR' => 'Skardu',
                                // Add more districts for Gilgit Division as needed
                            ),
                            // Add more divisions with their districts as needed
                        );

                        // Fetch the selected division code from the POST request
                        $selectedDivision = $_POST['division'];

                        // Check if districts exist for the selected division
                        if(isset($districtsByDivision[$selectedDivision])) {
                            // Loop through districts for the selected division and generate options for the dropdown
                            foreach($districtsByDivision[$selectedDivision] as $code => $name) {
                                echo "<option value='$code'>$name</option>";
                            }
                        } else {
                            echo "<option value=''>No districts available</option>";
                        }
                        ?>
                    </select>
                    <br><br>

                    <?php if(isset($_POST['district']) && $_POST['district'] != ""): ?>
                        <!-- Dropdown for selecting a tehsil -->
                        <select name="tehsil" onchange="this.form.submit()">
                            <option value="">Select Tehsil</option>
                            <?php
                            // Sample array of tehsils for different districts
                            $tehsilsByDistrict = array(
                                'LHR' => array(
                                    'MDR' => 'Model Town',
                                    'JHB' => 'Johar Town',
                                    // Add more tehsils for Lahore as needed
                                ),
                                'PES' => array(
                                    'HAY' => 'Hayatabad',
                                    'PAL' => 'Palosi',
                                    // Add more tehsils for Peshawar as needed
                                ),
                                'GBN' => array(
                                    'GIL' => 'Gilgit Tehsil',
                                    'SKR' => 'Skardu Tehsil',
                                    // Add more tehsils for Gilgit as needed
                                ),
                                // Add more districts with their tehsils as needed
                            );

                            // Fetch the selected district code from the POST request
                            $selectedDistrict = $_POST['district'];

                            // Check if tehsils exist for the selected district
                            if(isset($tehsilsByDistrict[$selectedDistrict])) {
                                // Loop through tehsils for the selected district and generate options for the dropdown
                                foreach($tehsilsByDistrict[$selectedDistrict] as $code => $name) {
                                    echo "<option value='$code'>$name</option>";
                                }
                            } else {
                                echo "<option value=''>No tehsils available</option>";
                            }
                            ?>
                        </select>
                        <br><br>
                    <?php endif; ?>
                <?php endif; ?>
            <?php endif; ?>
        <?php endif; ?>

        <!-- Submit button -->
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
