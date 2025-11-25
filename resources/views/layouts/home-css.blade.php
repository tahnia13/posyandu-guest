<style>

    /* Custom CSS untuk search dan filter */
.bg-pink {
    background-color: #e83e8c !important;
}

/* Hover effect untuk card */
.card:hover {
    transform: translateY(-2px);
    transition: transform 0.2s ease-in-out;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1) !important;
}

/* Style untuk search input */
.search-highlight {
    background-color: #fff3cd;
    padding: 2px 4px;
    border-radius: 3px;
}

/* Responsive design untuk filter */
@media (max-width: 768px) {
    .filter-card .col-md-4,
    .filter-card .col-md-3 {
        margin-bottom: 1rem;
    }
}
    /* Custom CSS untuk filter */
.bg-pink {
    background-color: #e83e8c !important;
}

.card.bg-primary .card-title,
.card.bg-success .card-title,
.card.bg-info .card-title {
    font-size: 1.5rem;
    font-weight: bold;
}

/* Hover effect untuk card */
.card:hover {
    transform: translateY(-2px);
    transition: transform 0.2s ease-in-out;
}

/* Style untuk filter form */
.filter-card {
    border-left: 4px solid #007bff;
}
/* Hero Section Styling */
.hero .welcome h2 {
    font-size: 3rem;
    font-weight: 700;
    margin-bottom: 1rem;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
}

.hero .welcome .lead {
    font-size: 1.5rem;
    font-weight: 300;
    margin-bottom: 0.5rem;
    text-shadow: 1px 1px 2px rgba(0,0,0,0.5);
}

.hero .welcome p {
    font-size: 1.1rem;
    text-shadow: 1px 1px 2px rgba(0,0,0,0.5);
    margin-bottom: 2rem;
}

.hero-buttons {
    margin-top: 2rem;
}

.btn-primary {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border: none;
    padding: 12px 30px;
    border-radius: 50px;
    font-weight: 600;
    transition: all 0.3s ease;
}

.btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
}

.btn-outline-light {
    border: 2px solid white;
    padding: 12px 30px;
    border-radius: 50px;
    font-weight: 600;
    transition: all 0.3s ease;
}

.btn-outline-light:hover {
    background: white;
    color: #333;
    transform: translateY(-2px);
}

/* About Section Styling */
.feature-item {
    border: 1px solid #e9ecef;
    border-radius: 10px;
    transition: all 0.3s ease;
    background: white;
}

.feature-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.icon-wrapper {
    width: 70px;
    height: 70px;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto;
}

.about .content h3 {
    color: #2c3e50;
    font-weight: 700;
    margin-bottom: 1.5rem;
}

.about .lead {
    font-size: 1.1rem;
    color: #495057;
    line-height: 1.7;
    margin-bottom: 2rem;
}

.bg-light {
    background-color: #f8f9fa !important;
    border-left: 4px solid #007bff;
}

.list-unstyled li {
    padding: 0.25rem 0;
}

/* Services Section Styling */
.service-item {
  padding: 30px 20px;
  text-align: center;
  border-radius: 10px;
  background: white;
  box-shadow: 0 5px 15px rgba(0,0,0,0.1);
  transition: all 0.3s ease;
  height: 100%;
  border: 1px solid #f0f0f0;
}

.service-item:hover {
  transform: translateY(-10px);
  box-shadow: 0 15px 30px rgba(0,0,0,0.2);
}

.service-item .icon {
  font-size: 3rem;
  color: #667eea;
  margin-bottom: 20px;
  background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

.service-item h3 {
  color: #2c3e50;
  font-weight: 600;
  margin-bottom: 15px;
  font-size: 1.3rem;
}

.service-item p {
  color: #6c757d;
  line-height: 1.6;
  margin-bottom: 15px;
}

.service-features {
  list-style: none;
  padding: 0;
  margin: 0;
  text-align: left;
}

.service-features li {
  padding: 5px 0;
  color: #495057;
  font-size: 0.9rem;
}

.service-features li i {
  color: #28a745;
  margin-right: 8px;
}

.alert-info {
  background: linear-gradient(135deg, #d1ecf1 0%, #bee5eb 100%);
  border: 1px solid #b8daff;
  border-radius: 10px;
  padding: 20px;
}

.section-title h2 {
  color: #2c3e50;
  font-weight: 700;
}

.section-title p {
  color: #6c757d;
  font-size: 1.1rem;
}

/* User Card Styling */
.user-info strong {
    color: #495057;
    font-weight: 500;
}

.card {
    border: none;
    border-radius: 10px;
    transition: all 0.3s ease;
}

.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.15) !important;
}

.card-title {
    color: #2c3e50;
    font-weight: 600;
}

.badge {
    font-size: 0.75em;
    font-weight: 500;
    padding: 0.35em 0.65em;
}

/* Responsive Design */
@media (max-width: 768px) {
    .hero .welcome h2 {
        font-size: 2rem;
    }
    
    .hero .welcome .lead {
        font-size: 1.2rem;
    }
    
    .hero-buttons {
        text-align: center;
    }
    
    .hero-buttons .btn {
        display: block;
        width: 100%;
        margin: 0.5rem 0;
    }
    
    .service-item {
        padding: 20px 15px;
    }
    
    .service-item .icon {
        font-size: 2.5rem;
    }
}

/* Floating WhatsApp Button */
.whatsapp-float {
    position: fixed;
    width: 60px;
    height: 60px;
    bottom: 25px;
    right: 25px;
    background-color: #25d366;
    color: #FFF;
    border-radius: 50px;
    text-align: center;
    font-size: 30px;
    box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
    z-index: 1000;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease-in-out;
    animation: pulse 2s infinite;
}

.whatsapp-float:hover {
    background-color: #128C7E;
    transform: scale(1.1);
    box-shadow: 2px 2px 15px rgba(0, 0, 0, 0.3);
}

@keyframes pulse {
    0% {
        box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.7);
    }
    70% {
        box-shadow: 0 0 0 10px rgba(37, 211, 102, 0);
    }
    100%
</style>