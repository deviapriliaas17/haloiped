<template>
    <div class="card">
        <div class="card-header">
            My Profile
        </div>
        <img :src="profile.image" alt="" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title">{{ user.name }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{ profile.short_name }}</h6>
            <p class="card-text">{{ profile.address }}</p>
            <p class="card-text">{{ profile.email }}</p>
            <p class="card-text">{{ profile.phone_number }}</p>
            <p class="card-text">{{ profile.birth_date }}</p>
            <p class="card-text">Link Facebook <a :href="profile.facebook_link" class="card-link">Klik</a></p>
            <p class="card-text">Link Instagram <a :href="profile.instagram_link" class="card-link">Klik</a></p>
            <p class="card-text">Link Github <a :href="profile.github_link" class="card-link">Klik</a></p>
            <p class="card-text">Link Cadangan <a :href="profile.another_link" class="card-link">Klik</a></p>
            <p class="card-text">Link Whatsapp <a :href="profile.whatsapp_link" class="card-link">Klik</a></p>
            <p class="card-text">Link Freelancer <a :href="profile.freelancer_link" class="card-link">Klik</a></p>
        </div>
    </div>
</template>