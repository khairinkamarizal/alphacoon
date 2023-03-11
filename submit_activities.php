<?php
  // Connect to the database
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "alpha";
  
  // Discord webhook URL
  $webhook_url = "https://discord.com/api/webhooks/1076635539186401440/qx_UPvn_fsmwTLJcxwV-jHY16_38yQAXVhguZ9Ya2QGwSPzCyfJe-oFPuD1xKkILROpo";

  $conn = mysqli_connect($servername, $username, $password, $dbname);
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  // Get the form data
  $title = $_POST["title"];
  $description = $_POST["description"];
  $image_url = $_POST["image_url"];

  // Insert the form data into the database
  $sql = "INSERT INTO activities (title, description, image_url)
  VALUES ('$title', '$description', '$image_url')";
  
  // Create webhook payload
$payload = array(
    "embeds" => [
        [
            "title" => "Activities",
            
            "type" => "rich",
            
            "description" => "**Title:** $title\n**Description:** $description",
            
            "color" => hexdec( "c31432" ),
			
            "image" => [
                "url" => "$image_url"
            ],
            "footer" => [
                "text" => "Unleash Your Inner Alpha with AlphaCoon!",
                "icon_url" => "https://i.imgur.com/68x98Np.png"
            ],
            
            "thumbnail" => [
                "url" => "https://i.imgur.com/wvDaRDH.png"
            ],
        ]
    ]
);

// Send webhook
$ch = curl_init($webhook_url);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

  if (mysqli_query($conn, $sql)) {
    echo '<script>alert("Thank you for your request!")</script>';
	header('Location: index.php');
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);
?>
