<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkillGiver</title>
    <link rel="stylesheet" href="css/styles.css">
    <script defer src="script/script.js"></script>
</head>
<body>
    <header>
        <h1>SkillGiver</h1>
        <nav>
            <a href="#" data-section="home">Home</a>
            <a href="#" data-section="about">About</a>
            <a href="#" data-section="services">Products/Services</a>
            <a href="#" data-section="news">News</a>
            <a href="#" data-section="contacts">Contacts</a>
        </nav>
    </header>

    <main>
        <!-- Home Section -->
        <section id="home">
            <h2>Welcome to SkillGiver</h2>
            <p>Trade your talents and collaborate with others to achieve more, without spending money.</p>
        </section>

        <!-- About Section -->
        <section id="about" class="hidden">
            <h2>About Us</h2>
            <p>SkillGiver is a skill exchange platform where users can trade services and collaborate on projects.</p>
        </section>

        <!-- Products/Services Section -->
        <section id="services" class="hidden">
            <h2>Our Services</h2>
            <ul>
                <li>Skill Matching System</li>
                <li>Portfolio Showcase</li>
                <li>Custom Project Requests</li>
                <li>Premium Subscription Services</li>
            </ul>
        </section>

        <!-- News Section -->
        <section id="news" class="hidden">
            <h2>Latest News</h2>
            <p>We’re constantly improving the SkillLinker experience. Stay updated here!</p>
        </section>

        <!-- Contacts Section -->
        <section id="contacts" class="hidden">
            <h2>Contact Us</h2>
            <table>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                </tr>
                <?php
                $file = 'contacts.txt';
                $contacts = file($file, FILE_IGNORE_NEW_LINES);
                foreach ($contacts as $contact) {
                    $contactDetails = explode(',', $contact);
                    echo "<tr><td>" . trim($contactDetails[0]) . "</td><td>" . trim($contactDetails[1]) . "</td><td>" . trim($contactDetails[2]) . "</td></tr>";
                }
                ?>
            </table>
        </section>
    </main>
</body>
</html>