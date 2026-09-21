from selenium.webdriver.common.by import By
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
import time

BASE_URL = "http://127.0.0.1:8000"


def test_student_current_course(driver):
    # 1. Login sebagai mahasiswa
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

    # 2. Tunggu sampai login selesai
    WebDriverWait(driver, 10).until(
        lambda d: "/login" not in d.current_url
    )

    # 3. Buka sidebar
    menu_button = WebDriverWait(driver, 10).until(
        EC.element_to_be_clickable(
            (
                By.XPATH,
                "//button[.//span[normalize-space()='menu']]"
            )
        )
    )

    menu_button.click()

    # 4. Klik Current Courses
    current_courses = WebDriverWait(driver, 10).until(
        EC.visibility_of_element_located(
            (
                By.XPATH,
                "//a[.//span[normalize-space()='Current Courses']]"
            )
        )
    )

    driver.execute_script(
        "arguments[0].click();",
        current_courses
    )

    # 5. Pastikan URL sudah berpindah
    WebDriverWait(driver, 10).until(
        EC.url_contains("/mahasiswa/dashboard/course")
    )

    assert "/mahasiswa/dashboard/course" in driver.current_url

    # 6. Pastikan heading halaman Current Course muncul
    heading = WebDriverWait(driver, 10).until(
        EC.visibility_of_element_located(
            (
                By.XPATH,
                "//h1[contains(normalize-space(), 'Daftar Mata Kuliah')]"
            )
        )
    )

    assert heading.is_displayed()

    # 7. Pastikan minimal satu course card tampil
    course_titles = WebDriverWait(driver, 10).until(
        EC.presence_of_all_elements_located(
            (
                By.CSS_SELECTOR,
                "h4.serif-text.text-2xl.font-bold"
            )
        )
    )

    assert len(course_titles) > 0

    # Hanya untuk melihat hasil secara visual saat debugging
    time.sleep(3)