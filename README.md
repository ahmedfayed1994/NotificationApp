## **📌 نظام إشعارات Laravel | Laravel Notification System**

### **🔹 مقدمة | Overview**

هذا المشروع يعرض كيفية استخدام **Service Container**، **Service Provider**، و **Dependency Injection** في Laravel. يمكن للمستخدمين إرسال الإشعارات عبر **البريد الإلكتروني (Email)** أو **الرسائل النصية (SMS)** بطريقة ديناميكية.

This project demonstrates the use of **Service Container**, **Service Provider**, and **Dependency Injection** in Laravel. It allows users to send notifications via **Email** or **SMS** dynamically.

---

## **📌 التثبيت | Installation**
### **1️⃣ استنساخ المستودع | Clone the repository**
```bash
git clone https://github.com/your-repository.git
cd NotificationApp
```

### **2️⃣ تثبيت المتطلبات | Install dependencies**
```bash
composer install
```

### **3️⃣ تشغيل سيرفر Laravel | Run the Laravel server**
```bash
php artisan serve
```

---

## **📌 نظرة عامة على المشروع | Project Overview**
- **NotificationService** يدير إرسال الإشعارات.
- **EmailService** يعالج إشعارات البريد الإلكتروني.
- **SmsService** يعالج إشعارات الرسائل النصية.
- **NotificationServiceProvider** يسجل الخدمات داخل `Service Container` الخاص بـ Laravel.
- **NotificationController** يعالج طلبات المستخدمين للإشعارات.
- يتم تعريف المسارات في `routes/web.php` لمعالجة طلبات API.

---

## **📌 الميزات | Features**
- دعم إرسال الإشعارات عبر **البريد الإلكتروني** و **الرسائل النصية**.
- استخدام **Service Container** لتحسين إدارة الاعتمادات.
- تنفيذ **Service Provider** لتسجيل الخدمات ديناميكيًا.
- استخدام **Dependency Injection** في الكنترولات.

---

## **📌 اختبار التطبيق | Testing the Application**
### **1️⃣ إرسال إشعار عبر البريد الإلكتروني | Send Notification via Email**
```bash
http://127.0.0.1:8000/send-notification?channel=email&message=Hello via Email
```
**النتيجة المتوقعة | Expected Output:**
```
📧 تم إرسال البريد الإلكتروني: Hello via Email
```

### **2️⃣ إرسال إشعار عبر الرسائل النصية القصيرة (SMS) | Send Notification via SMS**
```bash
http://127.0.0.1:8000/send-notification?channel=sms&message=Hello via SMS
```
**النتيجة المتوقعة | Expected Output:**
```
📱 تم إرسال رسالة SMS: Hello via SMS
```

---

## **📌 المفاهيم المستخدمة | Key Concepts Used**
| **المفهوم | Concept** | **كيفية استخدامه | How It Was Used** |
|------------|------------------|
| **Service Container** | تسجيل `NotificationService` لإدارة الاعتمادات تلقائيًا. |
| **Service Provider** | استخدام `NotificationServiceProvider` لتسجيل الخدمة داخل `Service Container`. |
| **Dependency Injection** | تمرير `NotificationService` تلقائيًا إلى `NotificationController`. |


---


## **📌 المطور | Developer**
🛠 **ahmedfayed** - مطور باك اند Laravel | Laravel Backend Developer 🚀

