<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="header.css"> 
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="consGenStyle.css">
    <link rel="stylesheet" href="bodyConBut.css">
    <title>Constant</title>
   
</head>
<body>
    <!-- Header -->
    <div class="header">    
            <h1>Welcome to My Constant Demonstration Page</h1>
    </div>

    <div class="container">
    <div class="content">
            
    <?php
    // Declare 10 named constants
    define("PI", 3.14159);              // Pi constant
    define("GRAVITY", 9.81);            // Earth's gravity
    define("LIGHT_SPEED", 299792458);   // Speed of light in m/s
    define("PLANCK", 6.626e-34);        // Planck's constant
    define("AVOGADRO", 6.022e23);       // Avogadro's number
    define("GOLDEN_RATIO", 1.618);      // Golden ratio
    define("BOLTZMANN", 1.38e-23);      // Boltzmann constant
    define("EARTH_RADIUS", 6371);       // Radius of Earth in km
    define("LIGHT_YEAR", 9.461e12);     // Distance of a light year in km
    define("EULER", 2.71828);           // Euler's number

    // Display constants
    echo "<h2>Constants and Their Values</h2>";
    echo "<table>
            <tr><th>Constant Name</th><th>Value</th><th>Description</th><th>Formula</th></tr>
            <tr><td>PI</td><td>" . PI . "</td><td>Ratio of the circumference to diameter of a circle</td><td>Circumference = 2 * PI * r</td></tr>
            <tr><td>GRAVITY</td><td>" . GRAVITY . "</td><td>Acceleration due to gravity on Earth (m/s²)</td><td>Distance fallen = 0.5 * GRAVITY * t²</td></tr>
            <tr><td>LIGHT_SPEED</td><td>" . LIGHT_SPEED . "</td><td>Speed of light in a vacuum (m/s)</td><td>Energy = Planck * LIGHT_SPEED / wavelength</td></tr>
            <tr><td>PLANCK</td><td>" . PLANCK . "</td><td>Planck's constant (Js)</td><td>Energy = PLANCK * frequency</td></tr>
            <tr><td>AVOGADRO</td><td>" . AVOGADRO . "</td><td>Avogadro's number (molecules/mol)</td><td>Molecules = AVOGADRO * moles</td></tr>
            <tr><td>GOLDEN_RATIO</td><td>" . GOLDEN_RATIO . "</td><td>Golden ratio (approximately 1.618)</td><td>Golden Rectangle: long side = short side * GOLDEN_RATIO</td></tr>
            <tr><td>BOLTZMANN</td><td>" . BOLTZMANN . "</td><td>Boltzmann constant (J/K)</td><td>Energy = BOLTZMANN * temperature</td></tr>
            <tr><td>EARTH_RADIUS</td><td>" . EARTH_RADIUS . " km</td><td>Radius of Earth in kilometers</td><td>Distance = EARTH_RADIUS * angle (in radians)</td></tr>
            <tr><td>LIGHT_YEAR</td><td>" . LIGHT_YEAR . " km</td><td>Distance of one light year in kilometers</td><td>Distance traveled by light in a year = LIGHT_YEAR</td></tr>
            <tr><td>EULER</td><td>" . EULER . "</td><td>Euler's number (base of natural logarithms)</td><td>Exponential growth: population = initial * EULER^rate*time</td></tr>
        </table>";

    // Using constants in calculations
    echo "<h2>Example Usage</h2>";
    echo "<table>
            <tr>
                <th>Constant Name</th>
                <th>Value</th>
                <th>Given Problem</th>
                <th>Solution</th>
            </tr>
            <tr>
                <td>PI</td>
                <td>3.14159</td>
                <td>Calculate the circumference of a circle with a radius of 15 cm.</td>
                <td> Use the formula Circumference = 2 × PI × radius. With a radius of 15 cm, the circumference would be 2× 3.14159 × 15.</td>
            </tr>
            <tr>
                <td>GRAVITY</td>
                <td>9.81 m/s²</td>
                <td>Determine how far an object will fall in 3 seconds if dropped from rest.</td>
                <td> Use the formula d = 0.5 × GRAVITY × t^2. For 𝑡 = 3 seconds, the distance fallen would be 0.5 × 9.81 × 3^2.</td>
            </tr>
            <tr>
                <td>LIGHT_SPEED</td>
                <td>299,792,458 m/s</td>
                <td>Calculate the distance light travels in 2.5 seconds.</td>
                <td> Use the formula Distance = LIGHT_SPEED × time. For t = 2.5 seconds, the distance is 299,792,458 × 2.5. </td>
            </tr>
            <tr>
                <td>PLANCK</td>
                <td>6.626 × 10⁻³⁴ Js</td>
                <td>Find the energy of a photon with a frequency of \( 5 \times 10^{14} \) Hz.</td>
                <td> Use the formula 𝐸 = PLANCK × frequency. For f = 5 × 10^14 Hz, the enerfy is 6.626 x 10 ^ (-34) × 5 × 10^14. </td>
            </tr>
            <tr>
                <td>AVOGADRO</td>
                <td>6.022 × 10²³ molecules/mol</td>
                <td>How many molecules are in 2 moles of water?</td>
                <td> Use the formula Molecules = AVOGADRO × moles. For 2 moles, the number of molecules is 6.022 × 10^23 × 2. </td>
            </tr>
            <tr>
                <td>GOLDEN_RATIO</td>
                <td>1.618</td>
                <td>You have a rectangle with a shorter side of 10 cm. What should the length of the longer side be to create a golden rectangle?</td>
                <td> Use the formula long side = short side × GOLDEN_RATIO. The longer side is 10 × 1.618. </td>
            </tr>
            <tr>
                <td>BOLTZMANN</td>
                <td>1.38 × 10⁻²³ J/K</td>
                <td>Calculate the energy of a particle at a temperature of 300 K.</td>
                <td> Use the formula E = BOLTZMANN × temperature. The energy is 1.38 × 10⁻²³ × 300. </td>
            </tr>
            <tr>
                <td>EARTH_RADIUS</td>
                <td>6371 km</td>
                <td>Find the distance between two points on Earth’s surface that are separated by a central angle of 1 radian.</td>
                <td> Use the formula Distance = EARTH_RADIUS × angle. The distance is 6371 × 1 km. </td>
            </tr>
            <tr>
                <td>LIGHT_YEAR</td>
                <td>9.461 × 10¹² km</td>
                <td>How far does light travel in 5 years?</td>
                <td> Use the formula Distance = LIGHT_YEAR × years. For 5 years, the distance is 9.461 × 10¹² × 5 km. </td>
            </tr>
            <tr>
                <td>EULER</td>
                <td>2.71828</td>
                <td>A population of bacteria doubles every hour. If the initial population is 100, how many bacteria will be present after 4 hours, assuming exponential growth?</td>
                <td> Use the formula Population = initial × EULER^(rate × time). Assuming a rate of 0.693 (log of 2), the population is 100 × 2.71828^(0.693 × 4). </td>
            </tr>
        </table>";
        ?>   
        <a href="index.php" class="home-button">Home</a>
        </div>
    </div>

    <!-- Footer Section -->
    <div class="footer">
        <p>Shekinah Mae O. Jubahib October 21, 2024.</p>
    </div>
    
</body>
</html>
