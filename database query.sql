CREATE DATABASE fsd10_Whisky;

USE fsd10_Whisky;

-- Create Users table
CREATE TABLE Users (
    userId INT AUTO_INCREMENT PRIMARY KEY,
    password VARCHAR(20) NOT NULL,
    firstName VARCHAR(30) NOT NULL,
    lastName VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL,
    phoneNumber VARCHAR(20) NOT NULL,
    address VARCHAR(255) NOT NULL,
    accountStatus VARCHAR(20) NOT NULL
);

-- Create Location table
CREATE TABLE Location (
    locationId INT AUTO_INCREMENT PRIMARY KEY,
    locationName VARCHAR(50) NOT NULL,
    address VARCHAR(255) NOT NULL,
    maxCapacity INT NOT NULL
);

-- Create Event table
CREATE TABLE Event (
    eventId INT AUTO_INCREMENT PRIMARY KEY,
    eventName VARCHAR(100) NOT NULL,
    locationId INT NOT NULL,
    date DATE NOT NULL,
    time TIME NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    musicalGenre VARCHAR(50) NOT NULL,
    maxCapacity INT NOT NULL,
    numOfTicketSold INT NOT NULL,
    FOREIGN KEY (locationId) REFERENCES Location(locationId)
);

-- Create Artist table
CREATE TABLE Artist (
    artistName VARCHAR(100),
    eventId INT,
    mainMusicalTalent VARCHAR(100) NOT NULL,
    PRIMARY KEY (artistName, eventId),
    FOREIGN KEY (eventId) REFERENCES Event(eventId)
);

-- Create Ticket table
CREATE TABLE Ticket (
    ticketId INT AUTO_INCREMENT PRIMARY KEY,
    eventId INT NOT NULL,
    locationId INT NOT NULL,
    FOREIGN KEY (eventId) REFERENCES Event(eventId),
    FOREIGN KEY (locationId) REFERENCES Location(locationId)
);

-- Create Orders table
CREATE TABLE Orders (
    orderId INT AUTO_INCREMENT PRIMARY KEY,
    userId INT NOT NULL,
    ticketId INT NOT NULL,
    ticketQuantity INT NOT NULL,
    ticketPrice DECIMAL(10, 2) NOT NULL,
    totalPrice DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (userId) REFERENCES users(userId),
    FOREIGN KEY (ticketId) REFERENCES Ticket(ticketId)
);
