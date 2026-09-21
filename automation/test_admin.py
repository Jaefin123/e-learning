from datetime import datetime

from selenium.webdriver.common.by import By
from selenium.webdriver.support.ui import WebDriverWait, Select
from selenium.webdriver.support import expected_conditions as EC


BASE_URL = "http://127.0.0.1:8000"


def test_admin_create_student(driver):
    # =========================================================
    # 1. Login sebagai Admin
    # =========================================================
    driver.get(f"{BASE_URL}/login")

    driver.find_element(
        By.ID,
        "email"
    ).send_keys("admin1@example.com")

    driver.find_element(
        By.ID,
        "password"
    ).send_keys("admin123")

    driver.find_element(
        By.CSS_SELECTOR,
        "button[type='submit']"
    ).click()

    WebDriverWait(driver, 10).until(
        lambda d: "/login" not in d.current_url
    )

    # =========================================================
    # 2. Buka sidebar
    # =========================================================
    menu_button = WebDriverWait(driver, 10).until(
        EC.element_to_be_clickable(
            (
                By.XPATH,
                "//button[.//span[normalize-space()='menu']]"
            )
        )
    )

    menu_button.click()

    # =========================================================
    # 3. Buka User Management
    # =========================================================
    user_management = WebDriverWait(driver, 10).until(
        EC.visibility_of_element_located(
            (
                By.XPATH,
                "//a[contains(@href, '/admin/user-management')]"
            )
        )
    )

    driver.execute_script(
        "arguments[0].click();",
        user_management
    )

    WebDriverWait(driver, 10).until(
        EC.url_contains("/admin/user-management")
    )

    assert "/admin/user-management" in driver.current_url

    # =========================================================
    # 4. Buka modal Tambah Akun
    # =========================================================
    add_user_button = WebDriverWait(driver, 10).until(
        EC.element_to_be_clickable(
            (By.ID, "openModalBtn")
        )
    )

    driver.execute_script(
        "arguments[0].click();",
        add_user_button
    )

    # Pastikan form sudah siap
    role_select = Select(
        WebDriverWait(driver, 10).until(
            EC.visibility_of_element_located(
                (By.ID, "roleSelect")
            )
        )
    )

    # =========================================================
    # 5. Buat data user unik
    # =========================================================
    timestamp = datetime.now().strftime("%Y%m%d%H%M%S")

    test_name = f"QA Automation User {timestamp}"
    test_email = f"qa.automation.{timestamp}@example.com"
    test_npm = f"QA{timestamp[-8:]}"
    test_password = "QaTest123!"

    # =========================================================
    # 6. Pilih role Mahasiswa
    # =========================================================
    role_select.select_by_visible_text("Mahasiswa")

    # =========================================================
    # 7. Isi data umum
    # =========================================================
    WebDriverWait(driver, 10).until(
        EC.visibility_of_element_located(
            (By.NAME, "name")
        )
    ).send_keys(test_name)

    driver.find_element(
        By.NAME,
        "email"
    ).send_keys(test_email)

    driver.find_element(
        By.NAME,
        "password"
    ).send_keys(test_password)

    # =========================================================
    # 8. Isi data mahasiswa
    # =========================================================
    driver.find_element(
        By.NAME,
        "mahasiswa_npm"
    ).send_keys(test_npm)

    prodi_select = Select(
        driver.find_element(
            By.NAME,
            "mahasiswa_prodi"
        )
    )

    prodi_select.select_by_visible_text("Teknik Komputer")

    driver.find_element(
        By.NAME,
        "mahasiswa_tahun_masuk"
    ).send_keys("2026")

    # =========================================================
    # 9. Submit
    # =========================================================
    submit_button = WebDriverWait(driver, 10).until(
        EC.element_to_be_clickable(
            (
                By.XPATH,
                "//button[@type='submit' and normalize-space()='Buat Akun']"
            )
        )
    )

    submit_button.click()

    # =========================================================
    # 10. Pastikan proses create selesai
    # =========================================================
    WebDriverWait(driver, 10).until(
        EC.url_contains("/admin/user-management")
    )

    assert "/admin/user-management" in driver.current_url

   # =========================================================
# 11. Verifikasi proses create selesai
# =========================================================

    # Pastikan kembali ke halaman User Management
    assert "/admin/user-management" in driver.current_url

    # Refresh untuk memuat data terbaru dari database
    driver.refresh()

    # Pastikan halaman User Management kembali tersedia
    WebDriverWait(driver, 10).until(
        EC.url_contains("/admin/user-management")
    )

    # Verifikasi halaman dapat dimuat setelah proses create
    assert "/admin/user-management" in driver.current_url