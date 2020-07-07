#
# Create this Table schema for MySQL
#
CREATE TABLE urls (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    url VARCHAR(255) NOT NULL,
    created DATETIME NOT NULL,
    accessed DATETIME,
    hits INT UNSIGNED NOT NULL DEFAULT 0,
    PRIMARY KEY (id),
    UNIQUE (url)
);
