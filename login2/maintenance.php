<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maintenance Request</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Maintenance Request Form</h1>
    </header>
    <main>
        <!-- Form for maintenance request -->
        <form id="maintenance-form" action="submit_request.php" method="POST" onsubmit="return validateForm()">
            <label for="description">Description:</label>
            <textarea id="description" name="description" required></textarea>

            <label for="urgency">Urgency:</label>
            <select id="urgency" name="urgency" required>
                <option value="">Select Urgency</option>
                <option value="low">Low</option>
                <option value="medium">Medium</option>
                <option value="high">High</option>
            </select>

            <label for="property">Property:</label>
            <select id="property" name="property" required>
                <option value="">Select Your Apartment</option>
                <option value="Apartment Complex A">Apartment Complex A</option>
                <option value="Apartment Complex B">Apartment Complex B</option>
                <option value="Apartment Complex C">Apartment Complex C</option>
            </select>

            <button type="submit">Submit Request</button>
        </form>

        <?php
        // Include PHP code to handle form submission
        include 'submit_request.php';
        ?>

    </main>
    <script>
        function validateForm() {
            var description = document.getElementById("description").value;
            var urgency = document.getElementById("urgency").value;
            var property = document.getElementById("property").value;

            if (description === "" || urgency === "" || property === "") {
                alert("All fields are required");
                return false;
            }

            return true;
        }
    </script>
</body>
</html>
