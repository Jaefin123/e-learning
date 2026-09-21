from selenium.webdriver.common.by import By
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC

BASE_URL = "http://127.0.0.1:8000"


def test_open_login_page(driver):
    driver.get(f"{BASE_URL}/login")

    assert "/login" in driver.current_url


def test_login_valid(driver):
    driver.get(f"{BASE_URL}/login")

    driver.find_element(
        By.ID,
        "email"
    ).send_keys("mhs1@example.com")

    driver.find_element(
        By.ID,
        "password"
    ).send_keys("mhs123")

    driver.find_element(
        By.CSS_SELECTOR,
        "button[type='submit']"
    ).click()

    WebDriverWait(driver, 10).until(
        lambda d: "/login" not in d.current_url
    )

    assert "/login" not in driver.current_url


def test_login_invalid(driver):
    driver.get(f"{BASE_URL}/login")

    driver.find_element(
        By.ID,
        "email"
    ).send_keys("email-tidak-valid@example.com")

    driver.find_element(
        By.ID,
        "password"
    ).send_keys("password-salah")

    driver.find_element(
        By.CSS_SELECTOR,
        "button[type='submit']"
    ).click()

    WebDriverWait(driver, 10).until(
        lambda d: "/login" in d.current_url
    )

    assert "/login" in driver.current_url


def test_logout(driver):
    # 1. Login sebagai mahasiswa
    driver.get(f"{BASE_URL}/login")

    driver.find_element(
        By.ID,
        "email"
    ).send_keys("mhs2@example.com")

    driver.find_element(
        By.ID,
        "password"
    ).send_keys("mhs098765")

    driver.find_element(
        By.CSS_SELECTOR,
        "button[type='submit']"
    ).click()

    # 2. Tunggu login selesai
    WebDriverWait(driver, 10).until(
        lambda d: "/login" not in d.current_url
    )

    # 3. Buka dropdown profile
    profile_summary = WebDriverWait(driver, 10).until(
        EC.element_to_be_clickable(
            (
                By.CSS_SELECTOR,
                "details > summary"
            )
        )
    )

    profile_summary.click()

    # 4. Cari dan klik Logout
    logout_button = WebDriverWait(driver, 10).until(
        EC.element_to_be_clickable(
            (
                By.XPATH,
                "//form[contains(@action, '/logout')]//button[normalize-space()='Logout']"
            )
        )
    )

    logout_button.click()

    # 5. Tunggu redirect setelah logout
    WebDriverWait(driver, 10).until(
        lambda d: d.current_url.rstrip("/") == BASE_URL
    )

    # 6. Pastikan sudah berada di landing page
    assert driver.current_url.rstrip("/") == BASE_URL

    # 7. Coba akses halaman mahasiswa lagi
    driver.get(f"{BASE_URL}/mahasiswa/dashboard")

    # 8. Pastikan session sudah berakhir dan diarahkan ke login
    WebDriverWait(driver, 10).until(
        EC.url_contains("/login")
    )

    assert "/login" in driver.current_url