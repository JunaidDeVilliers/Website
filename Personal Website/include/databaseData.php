<?php
    $user = "CREATE TABLE `junaid` (
      `id` int(11) NOT NULL,
      `firstname` text NOT NULL,
      `lastname` text NOT NULL,
      `field` text NOT NULL,
      `aboutMe` text NOT NULL,
      `Phone` text NOT NULL,
      `email` varchar(250) NOT NULL,
      `address` varchar(250) NOT NULL
    ) ";


    $userData = "INSERT INTO `junaid` (`id`, `firstname`, `lastname`, `field`, `aboutMe`, `Phone`, `email`, `address`) VALUES
    (1, 'Junaid', 'De Villiers', 'Software Developer', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores, velit alias eius non illum beatae atque repellat ratione qui veritatis repudiandae adipisci maiores. At inventore necessitatibus deserunt exercitationem cumque earum omnis ipsum rem accusantium quis, quas quia, accusamus provident suscipit magni! Expedita sint ad dolore, commodi labore nihil velit earum ducimus nulla quae nostrum fugit aut, deserunt reprehenderit libero enim!', '081 483 6219', 'junaiddevilliers@gmail.com', 'Port Elizabeth, South Africa')";

    $social = "CREATE TABLE `social` (
      `id` int(11) NOT NULL,
      `facebook` text NOT NULL,
      `twitter` text NOT NULL,
      `instagram` text NOT NULL,
      `linkedin` text NOT NULL
    ) ";

    $socialData = "INSERT INTO `social` (`id`, `facebook`, `twitter`, `instagram`, `linkedin`) VALUES
    (1, 'https://www.facebook.com/profile.php?id=100075197681223', 'https://twitter.com/39afb8471c06447', 'https://www.instagram.com/just_junaid_za/', 'https://www.linkedin.com/in/junaid-de-villiers-517aa8211/')";

    $conn->query($user);
    $conn->query($userData);
    $conn->query($social);
    $conn->query($socialData);


?>