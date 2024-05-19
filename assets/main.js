new Vue({
    el: '#app',
    data: {
      form: {
        isim: '',
        soyisim: '',
        email: '',
        istek: 'Lütfen bir seçim yapınız',
        cinsiyet: '',
        mesaj: ''
      },
      errors: {
        isim: '',
        soyisim: '',
        email: '',
        istek: '',
        cinsiyet: '',
        mesaj: ''
      }
    },
    methods: {
      validateEmail(email) {
        const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@(([^<>()[\]\\.,;:\s@"]+\.[^<>()[\]\\.,;:\s@"]{2,}))$/i;
        return re.test(email);
      },
      validateForm() {
        this.errors = {
          isim: '',
          soyisim: '',
          email: '',
          istek: '',
          cinsiyet: '',
          mesaj: ''
        };
        let valid = true;
  
        if (!this.form.isim) {
          this.errors.isim = '*İsim boş olamaz';
          valid = false;
        }
  
        if (!this.form.soyisim) {
          this.errors.soyisim = '*Soyisim boş olamaz';
          valid = false;
        }
  
        if (!this.validateEmail(this.form.email)) {
          this.errors.email = '*Geçerli email adresi girin';
          valid = false;
        }
  
        if (this.form.istek === 'Lütfen bir seçim yapınız') {
          this.errors.istek = '*Lütfen bir seçim yapınız';
          valid = false;
        }
  
        if (!this.form.cinsiyet) {
          this.errors.cinsiyet = '*Lütfen seçim yapın';
          valid = false;
        }
  
        if (this.form.mesaj.length <= 10) {
          this.errors.mesaj = '*Mesaj minimum 10 karakter olmalı';
          valid = false;
        }
  
        return valid;
      },
      submit() {
        if (this.validateForm()) {
          const formElement = document.createElement('form');
          formElement.action = 'iletisim-sonrasi.php';
          formElement.method = 'POST';
  
          for (const key in this.form) {
            if (this.form.hasOwnProperty(key)) {
              const inputElement = document.createElement('input');
              inputElement.type = 'hidden';
              inputElement.name = key;
              inputElement.value = this.form[key];
              formElement.appendChild(inputElement);
            }
          }
  
          document.body.appendChild(formElement);
          formElement.submit();
        }
      },
      resetForm() {
        this.form = {
          isim: '',
          soyisim: '',
          email: '',
          istek: 'Lütfen bir seçim yapınız',
          cinsiyet: '',
          mesaj: ''
        };
        this.errors = {
          isim: '',
          soyisim: '',
          email: '',
          istek: '',
          cinsiyet: '',
          mesaj: ''
        };
      }
    }
  });
  