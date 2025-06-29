# ScriptKiddie App



## 🔗 Live link

https://scriptkiddie-b4ss.onrender.com

## ✅ What it does

- Users can register, log in, and create notes
- Each user can only see their own notes (prevents IDOR)

## 🔒 Security

- Uses HTTPS for secure connections
- Session cookies are secure

## 🔧 How to test

1. Register two users
2. Make a note with the first user
3. Log in as the second user and try to access the first user's note URL
4. You should get a **403 Forbidden** error

---

Made for my secure development assignment to show basic access control and security.


This was made for my secure development assignment to show access control and security basics.
