<template>
    <div class="w-full h-screen flex">
      <div class="h-full w-[50%] bg-[#B3828A] flex">
        <div class="text-white font-sans w-[70%] flex items-center text-start p-10">
            <h1 class="text-3xl font-bold gap-3 flex text-start text-[#FFFFFF]">
            GENERAL SERVICES OFFICE REQUEST MANAGEMENT SYSTEM
                </h1>
        </div>
      </div>
  
      <div class="w-[50%] flex justify-center items-center bg-white mt-20">
        <div class="w-[70%] bg-white p-15">
          <h1 class="text-2xl block text-center font-bold gap-3 text-[#5D5F5D]">LOG IN</h1>
          <p class="text-sm text-neutral-600 mt-3 text-center">
            Enter your registered BulSu email address and password to access the GSO Request Management System
          </p>
  
          <div class="mt-3 px-20">
            <h1>Email Address</h1>
            <input 
              placeholder="Enter your email address here" 
              class="mt-1 p-1 w-96 border text-[#DDDDDD] rounded italic" 
            />
          </div>
  
          <div class="mt-3 px-20">
            <h1>Password</h1>
            <input 
              placeholder="Enter your password here" 
              class="mt-2 p-1 w-96 border text-[#DDDDDD] rounded italic" 
            />
          </div>
  
          <div class="px-20">
            <a class="text-xs flex justify-end text-[#ACADAC] hover:underline">
              Forgot your password?
            </a>
          </div>
  
          <div class="w-full flex justify-center">
            <div class="text-center mt-4 bg-[#D77E4A] rounded-lg w-[30%] text-white py-2 hover">
              <router-link to="/about">LOG IN</router-link>
            </div>
          </div>
  
          <div class="px-28 flex  border-gray-700 mt-48 ">
            <p class="text-xs justify-end text-[#AOAO1AO]">
              Developed by DIO-ISPIR (c) 2024 Bulacan State University.
            </p>
          </div>
        </div>
      </div>
    </div>
  </template>
  <script>

  export default {
    name: 'Home',
 
  };
  </script>
  
  
  <style>
  /* Add component-specific styles here */
  </style>