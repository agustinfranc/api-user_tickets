# API User Tickets

## Build Setup

```bash
# install dependencies
$ composer install

# create .env
set env variables based on .env.example

# create database and set name into .env

# migrate and seed
php artisan migrate --seed

# serve with hot reload at localhost:8000 (omit if served with WAMP, XAMP)
$ php artisan serve
```

## Resources (endpoints)

***

### Ticket Status

```bash
GET | tickets/search/active
```

> Return status (boolean) of a ticket searching by code

### URI Parameters

Field | Description
--- | ---
code | String of any ticket's code (required).

### Example

```bash
GET | localhost:8000/api/tickets/search/active?code=JOJSE023
```

Response Data

```json
false
```

***

### User active tickets

```bash
GET | users/search/tickets
```

> Return active tickets (array) of any user searching by its email

### URI Parameters

Field | Description
--- | ---
email | String of any users's email (required).

### Example

```bash
GET | localhost:8000/api/users/search/tickets?email=rryan@example.org
```

Response Data

```json
[
    {
        "id": 7,
        "user_id": 1,
        "code": "YIHVJ314",
        "active": true,
        "created_at": "2021-01-31T15:32:58.000000Z",
        "updated_at": "2021-01-31T15:32:58.000000Z"
    }
]
```
