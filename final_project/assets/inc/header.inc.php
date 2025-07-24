<?php 
    $currentPageStr = $_SERVER["PHP_SELF"];
    $currentPageArr = explode("/", $currentPageStr);
    $currentPage = $currentPageArr[count($currentPageArr)-1];
    $cairoPages = ['Cairo.php', 'Landmarks.php', 'Museums.php', 'SacredSites.php', 'CairoActivities.php'];
    $isCairoPage = in_array($currentPage, $cairoPages);
    $luxorPages = ['Luxor.php', 'WestBank.php', 'EastBank.php', 'LuxorActivities.php'];
    $isLuxorPage = in_array($currentPage, $luxorPages);
    $resourcePages = ['Comments.php','WorkCited.php', 'Grading.php'];
    $isResourcePage = in_array($currentPage, $resourcePages);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Individual Project: Egypt</title>

     <!-- newsreader -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,opsz,wght@0,6..72,200..800;1,6..72,200..800&display=swap" rel="stylesheet">

     <!-- PT sans -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/styles/styles.css">
    <script src="assets/script/navigationBar.js" defer></script>
</head>
  <body>
    <header>
      <nav class="topnav">
        <a href="index.php" class="homeBtn <?php echo ($currentPage == 'index.php') ? 'underline' : 'none'; ?>">Home</a>
        <a href="OurItinerary.php" class="<?php echo ($currentPage == 'OurItinerary.php') ? 'underline' : 'none'; ?>">Our Itinerary</a>
        <div class="dropdown">
          <button class="button dropBtn <?php echo ($isCairoPage) ? 'underline' : 'none'; ?>" onclick="toggleMiniDropdown('0')">Cairo</button>
          <div class="links">
            <a href="Cairo.php">At a Glance</a>
            <a href="Landmarks.php">Landmarks</a>
            <a href="Museums.php">Musems</a>
            <a href="SacredSites.php">Sacred Sites</a>
            <a href="CairoActivities.php">Activities</a>
          </div>
        </div>
        <div class="dropdown">
          <button class="button dropBtn <?php echo ($isLuxorPage) ? 'underline' : 'none'; ?>" onclick="toggleMiniDropdown('1')">Luxor</button>
          <div class="links">
            <a href="Luxor.php">At a Glance</a>
            <a href="WestBank.php">West Bank</a>
            <a href="EastBank.php">East Bank</a>
            <a href="LuxorActivities.php">Activities</a>
          </div>
        </div>
        <div class="dropdown">
          <button class="button dropBtn <?php echo ($isResourcePage) ? 'underline' : 'none'; ?>" onclick="toggleMiniDropdown('2')">Resources</button>
          <div class="links">
            <a href="Comments.php">Comments</a>
            <a href="WorkCited.php">Work Cited</a>
            <a href="Grading.php">Grading</a>
            <a href="../index.html">Main Page</a>
          </div>
        </div>
        <a href="javascript:void(0);" class="hamburgerIcon" onclick="toggleDropdown()">&#9776;</a>
      </nav>
    </header>