<?php

$currentPage = basename($_SERVER['PHP_SELF']);

$seoData = [

    /* HOME */
    "index.php" => [
        "title" => "TechNext Systems | CCTV, Access Control, Networking & Automation Solutions",
        "description" => "TechNext Systems provides CCTV Surveillance, Access Control, Networking, Video Conferencing, Home Automation, EPABX, Digital Signage, Fire Alarm Systems and complete IT Infrastructure solutions in Delhi NCR.",
        "keywords" => "TechNext Systems, CCTV installation Delhi, Access Control Systems, Networking Solutions, Home Automation, EPABX Systems, Video Conferencing, Digital Signage, Fire Alarm",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    /* ABOUT */
    "about.php" => [
        "title" => "About TechNext Systems | Smart Security & IT Solutions",
        "description" => "Learn about TechNext Systems, a trusted provider of security, surveillance, networking, automation and IT infrastructure solutions.",
        "keywords" => "About TechNext Systems, IT Solutions Company, CCTV Company Delhi, Security Solutions",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    /* CCTV */
    "cctv-cameras.php" => [
        "title" => "CCTV Surveillance Cameras | IP, Analog & Wireless Cameras",
        "description" => "Professional CCTV camera installation with IP Cameras, Analog Cameras, Wireless CCTV, DVR & NVR solutions for homes, offices and industries.",
        "keywords" => "CCTV Cameras, IP Cameras, Wireless CCTV, Analog Cameras, DVR, NVR",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    /* ATTENDANCE */
    "attendance-access-control.php" => [
        "title" => "Attendance & Access Control Systems | TechNext Systems",
        "description" => "Biometric Attendance Machines, Face Recognition, Fingerprint Attendance and Access Control Systems for businesses and organizations.",
        "keywords" => "Attendance Machine, Access Control, Biometric Attendance, Face Recognition Attendance",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    /* AUDIO */
    "audio-pa-system.php" => [
        "title" => "Audio & Public Address Systems | TechNext Systems",
        "description" => "Professional Audio Systems and Public Address Solutions for schools, offices, factories, malls and commercial spaces.",
        "keywords" => "PA System, Audio System, Public Address System",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    /* BOOM BARRIER */
    "boom-barriers-turnstiles.php" => [
        "title" => "Boom Barriers & Turnstiles | Entrance Management Solutions",
        "description" => "Automatic Boom Barriers and Turnstile Gate Systems for parking management and access control.",
        "keywords" => "Boom Barrier, Turnstile Gate, Parking Barrier",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    /* DESKTOP */
    "desktops-laptops-thin-clients.php" => [
        "title" => "Desktops, Laptops & Thin Clients | TechNext Systems",
        "description" => "Business Desktops, Laptops and Thin Client Systems with installation and deployment services.",
        "keywords" => "Desktop Computer, Laptop, Thin Client",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    /* DIGITAL SIGNAGE */
    "digital-signage.php" => [
        "title" => "Digital Signage & LED Display Solutions",
        "description" => "Indoor & Outdoor LED Displays, Digital Signage and Advertising Display Solutions.",
        "keywords" => "Digital Signage, LED Display, Outdoor LED Wall",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    /* SMART LOCK */
    "electronic-wardrobe-locks.php" => [
        "title" => "Electronic Wardrobe Locks | Smart Lock Solutions",
        "description" => "Electronic Wardrobe Locks for hotels, offices, gyms and institutions.",
        "keywords" => "Electronic Wardrobe Lock, Digital Lock",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    /* EPABX */
    "epabx-intercom.php" => [
        "title" => "EPABX & Intercom Systems | Business Communication",
        "description" => "IP EPABX, Analog EPABX, Office Intercom and Communication Systems.",
        "keywords" => "EPABX System, Office Intercom, IP PBX",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    /* FIRE */
    "fire-alarm-system.php" => [
        "title" => "Fire Alarm & Intrusion Alarm Systems",
        "description" => "Addressable Fire Alarm, Conventional Fire Alarm and Intrusion Alarm Systems.",
        "keywords" => "Fire Alarm System, Intrusion Alarm",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    /* GALLERY */
    "gallery.php" => [
        "title" => "Project Gallery | TechNext Systems",
        "description" => "View our completed CCTV, Networking, Automation and Security projects.",
        "keywords" => "Project Gallery, CCTV Installation Images",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    /* HOME AUTOMATION */
    "home-automation.php" => [
        "title" => "Home Automation Solutions | Smart Home",
        "description" => "Smart Home Automation, Motorized Curtains, Smart Lighting and IoT Solutions.",
        "keywords" => "Home Automation, Smart Home",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    /* LED DISPLAY */
    "interactive-led-displays.php" => [
        "title" => "Interactive Displays & LED Video Walls",
        "description" => "Interactive Flat Panels, Smart Boards and LED Video Wall Solutions.",
        "keywords" => "Interactive Display, LED Wall, Smart Board",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    /* NETWORKING */
    "mesh-networking.php" => [
        "title" => "Wired & Wireless Mesh Networking Solutions",
        "description" => "Enterprise Networking, WiFi Solutions, Structured Cabling and Mesh Networking.",
        "keywords" => "Mesh Networking, WiFi Solutions",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    /* METAL DETECTOR */
    "metal-detectors.php" => [
        "title" => "Handheld & Door Frame Metal Detectors",
        "description" => "Security Metal Detectors for airports, schools, industries and events.",
        "keywords" => "Metal Detector, Door Frame Metal Detector",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    /* BOOSTER */
    "mobile-signal-boosters.php" => [
        "title" => "Mobile Signal Boosters | Network Enhancement",
        "description" => "Improve indoor mobile network coverage with professional signal boosters.",
        "keywords" => "Mobile Signal Booster",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    /* PROJECTOR */
    "projectors.php" => [
        "title" => "Short & Long Throw Projectors",
        "description" => "Business, Education and Home Theatre Projector Solutions.",
        "keywords" => "Projector, Short Throw Projector",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    /* SMART DOOR LOCK */
    "smart-door-locks.php" => [
        "title" => "Smart Door Locks | Digital Lock Systems",
        "description" => "Fingerprint, RFID, PIN and Smart Door Lock installation services.",
        "keywords" => "Smart Door Lock, Digital Door Lock",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    /* THANK YOU */
    "thankyou.php" => [
        "title" => "Thank You | TechNext Systems",
        "description" => "Thank you for contacting TechNext Systems.",
        "keywords" => "",
        "canonical" => "",
        "robots" => "noindex, nofollow"
    ],

    /* VIDEO CONFERENCE */
    "video-conferencing.php" => [
        "title" => "Video Conferencing Solutions",
        "description" => "Professional Video Conferencing Systems for offices, boardrooms and educational institutions.",
        "keywords" => "Video Conferencing, Meeting Room Solutions",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    /* VIDEO DOOR PHONE */
    "video-door-phones.php" => [
        "title" => "Video Door Phone Systems",
        "description" => "Smart Video Door Phones with mobile connectivity and visitor management.",
        "keywords" => "Video Door Phone",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    /* CONTACT */
    "contact.php" => [
        "title" => "Contact TechNext Systems",
        "description" => "Contact TechNext Systems for CCTV, Networking, Automation and Security Solutions.",
        "keywords" => "Contact TechNext Systems",
        "canonical" => "",
        "robots" => "index, follow"
    ],

    /* ERROR */
    "error.php" => [
        "title" => "404 - Page Not Found | TechNext Systems",
        "description" => "The page you are looking for could not be found.",
        "keywords" => "",
        "canonical" => "",
        "robots" => "noindex, nofollow"
    ],

];

/* Default SEO */

$defaultMeta = [
    "title" => "TechNext Systems | Security, Surveillance & IT Infrastructure Solutions",
    "description" => "TechNext Systems provides CCTV, Networking, Automation, Fire Alarm, Access Control, Video Conferencing, EPABX and complete IT Infrastructure solutions.",
    "keywords" => "TechNext Systems, CCTV, Networking, Automation, Security Solutions",
    "canonical" => "",
    "robots" => "index, follow"
];

$pageMeta = $seoData[$currentPage] ?? $defaultMeta;

?>