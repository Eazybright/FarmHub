CREATE TABLE products (
        id int(11) NOT NULL AUTO_INCREMENT,
        name varchar(255) NOT NULL,
        description varchar(255) NOT NULL,
        price varchar(255) NOT NULL,
        picture varchar(255) NOT NULL,
        PRIMARY KEY (id),
        KEY slug (slug)
);
INSERT INTO `products`(`id`, `name`, `description`, `price`, `picture`) VALUES
(1, 'Tomato', 'The tomato is the edible, often red, 
    fruit/berry of the plant Solanum lycopersicum, commonly known as a tomato plant.', 500, 'assets/images/tomato_2.jpg'),
(2, 'Onion', 'The onion, also known as the bulb onion or common onion, is a vegetable that is the most widely cultivated species of the genus Allium.',
    400, 'assets/images/onion.jpg'),
(3, 'Carrot', 'The carrot is a root vegetable, usually orange in colour, though purple, black, red, white, and yellow cultivars exist.',
     350, 'assets/images/carrot_2.jpg' ),
(4, 'Banana', 'Banana is an edible fruit,botanically a berry produced by several kinds of large herbaceous flowering plants in the genus Musa.',
     450, 'assets/images/banana_2.jpg'),
(5, 'Mango', 'Mangoes are juicy stone fruit (drupe) from numerous species of tropical trees belonging to the flowering plant genus Mangifera, cultivated mostly for their edible fruit.',
     500, 'assets/images/mango.jpg'),
(6, 'Pear', '', 550, 'assets/images/pear.jpg'),
(7, 'Wheat','', 600, 'assets/images/wheat.jpg'),
(8, 'Sorghum','', 400, 'assets/images/sorghum.jpg' ),
(9, 'Rice', ' ', 650, 'assets/images/rice_3.jpg'),
(10, 'Oat', '', 350, 'assets/images/oat_2.jpg'),
(11, 'Maize', 450, 'assets/images/maize_2.jpg');