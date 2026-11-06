# 🐘 Native PHP & MySQL Simple User CRUD Application

Isang malinis at batayang **User Management Application** na binuo gamit ang native Procedural PHP at MySQL/MariaDB (`mysqli`). Ang proyektong ito ay nagpapakita ng kumpletong **CRUD** (Create, Read, Update, Delete) flow kasama ang dynamic styling at alert redirections.

---

## 📌 Features

- ➕ **Create User:** Magdagdag ng bagong `username` at `password` sa database.
- 📋 **Read Users:** I-fetch at i-display ang listahan ng mga user sa isang HTML table na naka-order batay sa pinakabagong `id DESC`.
- ✏️ **Update User:** Baguhin ang umiiral na detalye ng user gamit ang nakalaang edit form.
- 🗑️ **Delete User:** Magbura ng napiling record gamit ang `deleteId`.

---

## 📁 File & Project Structure

```text
php-crud/
├── database.php    # MySQL database connection configuration
├── create.php      # INSERT query process & redirection
├── read.php        # SELECT query list generator
├── update.php      # Edit form UI & UPDATE query process
├── delete.php      # DELETE query process
└── index.php       # Main UI container (User Creation Form & Data Table)
```
