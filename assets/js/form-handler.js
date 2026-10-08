/**
 * Annapoorna Restaurant — Interactive AJAX Form Handler
 * Enhances Contact and Catering forms with asynchronous submission,
 * loading states, accessible feedback alerts, and automatic reset.
 */

document.addEventListener('DOMContentLoaded', () => {
    const forms = document.querySelectorAll('form.elementor-form, #contact-form, #catering-form');

    forms.forEach(form => {
        form.addEventListener('submit', async (e) => {
            // Respect native HTML5 form constraints
            if (!form.checkValidity()) {
                return;
            }

            e.preventDefault();

            const submitBtn = form.querySelector('button[type="submit"]');
            const originalBtnContent = submitBtn ? submitBtn.innerHTML : '';
            
            // Remove previous feedback alerts
            form.querySelectorAll('.elementor-message').forEach(el => el.remove());

            // Loading state
            if (submitBtn) {
                submitBtn.disabled = true;
                submitBtn.style.opacity = '0.7';
                submitBtn.style.cursor = 'not-allowed';
                const textSpan = submitBtn.querySelector('.elementor-button-text');
                if (textSpan) {
                    textSpan.textContent = 'Sending...';
                }
            }

            const actionUrl = form.getAttribute('action') || '/submit-inquiry.php';
            const formData = new FormData(form);

            try {
                const response = await fetch(actionUrl, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'Accept': 'application/json'
                    }
                });

                const data = await response.json();

                const messageBox = document.createElement('div');
                messageBox.className = 'elementor-message ' + (data.success ? 'elementor-message-success' : 'elementor-message-danger');
                messageBox.setAttribute('role', 'alert');
                messageBox.style.cssText = data.success 
                    ? 'padding: 14px 18px; margin-bottom: 20px; background: #e8f5e9; border: 1px solid #a5d6a7; border-radius: 4px; color: #2e7d32; font-size: 15px; line-height: 1.5;'
                    : 'padding: 14px 18px; margin-bottom: 20px; background: #ffebee; border: 1px solid #ffcdd2; border-radius: 4px; color: #c62828; font-size: 15px; line-height: 1.5;';
                
                messageBox.textContent = data.message || (data.success ? 'Your request has been submitted successfully.' : 'An error occurred.');

                // Insert feedback message before form fields wrapper
                const fieldsWrapper = form.querySelector('.elementor-form-fields-wrapper');
                if (fieldsWrapper) {
                    form.insertBefore(messageBox, fieldsWrapper);
                } else {
                    form.prepend(messageBox);
                }

                if (data.success) {
                    form.reset();
                    // Smoothly scroll message into view if offscreen
                    messageBox.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                }
            } catch (err) {
                console.error('Form submission error:', err);
                const errorBox = document.createElement('div');
                errorBox.className = 'elementor-message elementor-message-danger';
                errorBox.setAttribute('role', 'alert');
                errorBox.style.cssText = 'padding: 14px 18px; margin-bottom: 20px; background: #ffebee; border: 1px solid #ffcdd2; border-radius: 4px; color: #c62828; font-size: 15px; line-height: 1.5;';
                errorBox.textContent = 'Unable to send your request at this moment. Please check your internet connection or call us directly.';
                
                const fieldsWrapper = form.querySelector('.elementor-form-fields-wrapper');
                if (fieldsWrapper) {
                    form.insertBefore(errorBox, fieldsWrapper);
                } else {
                    form.prepend(errorBox);
                }
            } finally {
                // Restore button state
                if (submitBtn) {
                    submitBtn.disabled = false;
                    submitBtn.style.opacity = '1';
                    submitBtn.style.cursor = 'pointer';
                    submitBtn.innerHTML = originalBtnContent;
                }
            }
        });
    });
});
