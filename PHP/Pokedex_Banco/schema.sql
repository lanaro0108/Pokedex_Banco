-- Schema para Pokedex
CREATE TABLE IF NOT EXISTS pokemon (
    id SERIAL PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    types VARCHAR(200),
    height REAL,
    weight REAL,
    sprite_url TEXT,
    is_legendary BOOLEAN DEFAULT false,
    description TEXT
);
